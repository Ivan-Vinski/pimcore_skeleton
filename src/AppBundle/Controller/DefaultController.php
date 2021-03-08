<?php

namespace AppBundle\Controller;

use AppBundle\Model\DataObject\Customer;
use AppBundle\Form\CheckoutType;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\Product;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Cars;
use Pimcore\Model\DataObject\Fieldcollection\Data\TaxEntry;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Templating\Model\ViewModel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Zend\Paginator\Paginator;

class DefaultController extends FrontendController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        parent::onKernelController($event);
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }

    /**
     * @Route ("/default")
     */
    public function defaultAction(Request $request)
    {
        $list = \Pimcore\Bundle\EcommerceFrameworkBundle\Factory::getInstance()->getIndexService()->getProductListForCurrentTenant();
        //dd($list);
        //$list->addCondition("name = 'test'", 'name');
        dd($list->getItems(0, 1));
    }

    /**
     * @Route("/testOverride", name="test_override")
     *
     * @param Request $request
     */
    public function myAction(Request $request)
    {
        $customer = new Customer();
        $customer->setTest('test');
        $customer->setParentId(2);
        $customer->setKey('customer_one');
        $customer->setPublished(true);
        $customer->save();
        dd($customer);
    }

    /**
     * @Route ("/dashboard", name="app_dashboard")
     * @Security ("has_role('ROLE_USER')")
     */
    public function dashboardAction()
    {

    }


    /**
     * @Route ("/shop", name="app_shop")
     * @param Factory $factory
     * @param Request $request
     * @return mixed
     */
    public function testAction(
        Factory $factory,
        Request $request
    ) {
        $params = array_merge($request->query->all(), $request->attributes->all());
        $listing = $factory::getInstance()->getIndexService()->getProductListForCurrentTenant();
        //dd($listing->getProducts());
        $filterDefinition = FilterDefinition::getByPath('/Shop/Filter-Definitions/myFilter');
        $filterService = $factory->getFilterService();

        $this->view->listing = $listing;
        $this->view->filterService = $filterService;
        $this->view->filterDefinition = $filterDefinition;

        Helper::setupProductList($filterDefinition, $listing, $params, $this->view, $filterService, true);

        //$this->view->results = $listing->getProducts();

        $paginator = new Paginator($listing);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage($filterDefinition->getPageLimit());
        $paginator->setPageRange(10);
        $this->view->results = $paginator;
        $this->view->paginationVariables = $paginator->getPages('sliding');

    }


    /**
     * @Route ("/add-to-cart", methods={"GET"})
     * @Security ("has_role('ROLE_USER')")
     * @param Request $request
     * @param Factory $factory
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addToCartAction(Request $request, Factory $factory)
    {
        $car = Cars::getById($request->get('id'));
        $customer = $this->getUser();
        $cartManager = $factory->getCartManager();

        $cart = $cartManager->getCartByName($customer->getFirstname());

        if (!$cart) {
            $cartId = $cartManager->createCart(['name' => $customer->getFirstname()]);
            $cart = $cartManager->getCart($cartId);
        }

        $cart->addItem($car, 1);
        $cart->save();

        return $this->redirect($this->generateUrl('app_shop'));
    }

    /**
     * @Route ("/cart", name="app_cart")
     * @Security ("has_role('ROLE_USER')")
     * @param Factory $factory
     */
    public function cartAction(Factory $factory)
    {
        $customer = $this->getUser();
        $cartManager = $factory->getCartManager();
        $cart = $cartManager->getCartByName($customer->getFirstname());

        if (!$cart) {
            $cartId = $cartManager->createCart(['name' => $customer->getFirstname()]);
            $cart = $cartManager->getCart($cartId);
        }

        $this->view->cart = $cart;
    }

    /**
     * @Route ("/checkout", name="app_checkout", methods={"GET", "POST"})
     * @Security ("has_role('ROLE_USER')")
     * @param Request $request
     * @param Factory $factory
     */
    public function checkoutAction(Request $request, Factory $factory)
    {

        $customer = $this->getUser();

        $form = $this->createForm(CheckoutType::class, null, [
            'street' => $customer->getStreet(),
            'city' => $customer->getCity()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $address = ($request->request->get('street'). ", ").$request->request->get('city');
            $cartManager = $factory->getCartManager();
            $cart = $cartManager->getCartByName($customer->getFirstname());
            $checkoutManager = $factory->getCheckoutManager($cart);
            $step = $checkoutManager->getCheckoutStep("deliveryaddress");
            $checkoutManager->commitStep($step, $address);
            $cart->save();
        }

        $this->view->form = $form->createView();
    }



}
