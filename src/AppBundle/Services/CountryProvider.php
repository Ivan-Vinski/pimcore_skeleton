<?php


namespace AppBundle\Services;


use Pimcore\Localization\LocaleServiceInterface;


class CountryProvider
{
    private $localService;

    public function __construct(LocaleServiceInterface $localeService)
    {
        $this->localService = $localeService;
    }

    /**
     * @retun array
     */
    public function getCountries() : array
    {
        $data = [];
        $countries = $this->localService->getDisplayRegions();
        foreach ($countries as $short => $full) {
            $data["$full($short)"] = "$full($short)";
        }

        return $data;
    }
}
