<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- active [checkbox]
- firstname [firstname]
- lastname [lastname]
- gender [select]
- birthdate [date]
- street [input]
- zip [input]
- city [input]
- countryCode [country]
- email [email]
- phone [input]
- profilingConsent [consent]
- manualSegments [manyToManyObjectRelation]
- calculatedSegments [advancedManyToManyObjectRelation]
- password [password]
- ssoIdentities [manyToManyObjectRelation]
- idEncoded [input]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'Customer',
   'name' => 'Customer',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1613652422,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => 'CustomerManagementFrameworkBundle\\Model\\AbstractCustomer\\DefaultAbstractUserawareCustomer',
   'implementsInterfaces' => '\\Symfony\\Component\\Security\\Core\\User\\UserInterface',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 100,
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
             'fieldtype' => 'tabpanel',
             'border' => false,
             'tabPosition' => 'top',
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 140,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Personal data',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                     'fieldtype' => 'checkbox',
                     'defaultValue' => 1,
                     'queryColumnType' => 'tinyint(1)',
                     'columnType' => 'tinyint(1)',
                     'phpdocType' => 'bool',
                     'name' => 'active',
                     'title' => 'Active',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'defaultValueGenerator' => '',
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 180,
                     'name' => 'Person',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Person',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Firstname::__set_state(array(
                         'fieldtype' => 'firstname',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'firstname',
                         'title' => 'First name',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Lastname::__set_state(array(
                         'fieldtype' => 'lastname',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'lastname',
                         'title' => 'Last name',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                         'fieldtype' => 'select',
                         'options' => 
                        array (
                          0 => 
                          array (
                            'key' => 'Male',
                            'value' => 'male',
                          ),
                          1 => 
                          array (
                            'key' => 'Female',
                            'value' => 'female',
                          ),
                        ),
                         'width' => '',
                         'defaultValue' => '',
                         'optionsProviderClass' => '',
                         'optionsProviderData' => '',
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 190,
                         'phpdocType' => 'string',
                         'dynamicOptions' => false,
                         'name' => 'gender',
                         'title' => 'Gender',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      3 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Date::__set_state(array(
                         'fieldtype' => 'date',
                         'queryColumnType' => 'bigint(20)',
                         'columnType' => 'bigint(20)',
                         'phpdocType' => '\\Carbon\\Carbon',
                         'defaultValue' => NULL,
                         'useCurrentDate' => false,
                         'name' => 'birthdate',
                         'title' => 'Birth date',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                    ),
                     'locked' => false,
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 180,
                     'name' => 'Address',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Address',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'street',
                         'title' => 'Street',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'zip',
                         'title' => 'ZIP',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'city',
                         'title' => 'City',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      3 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Country::__set_state(array(
                         'fieldtype' => 'country',
                         'restrictTo' => '',
                         'options' => 
                        array (
                          0 => 
                          array (
                            'key' => 'Afghanistan',
                            'value' => 'AF',
                          ),
                          1 => 
                          array (
                            'key' => 'Albania',
                            'value' => 'AL',
                          ),
                          2 => 
                          array (
                            'key' => 'Algeria',
                            'value' => 'DZ',
                          ),
                          3 => 
                          array (
                            'key' => 'American Samoa',
                            'value' => 'AS',
                          ),
                          4 => 
                          array (
                            'key' => 'Andorra',
                            'value' => 'AD',
                          ),
                          5 => 
                          array (
                            'key' => 'Angola',
                            'value' => 'AO',
                          ),
                          6 => 
                          array (
                            'key' => 'Anguilla',
                            'value' => 'AI',
                          ),
                          7 => 
                          array (
                            'key' => 'Antarctica',
                            'value' => 'AQ',
                          ),
                          8 => 
                          array (
                            'key' => 'Antigua and Barbuda',
                            'value' => 'AG',
                          ),
                          9 => 
                          array (
                            'key' => 'Argentina',
                            'value' => 'AR',
                          ),
                          10 => 
                          array (
                            'key' => 'Armenia',
                            'value' => 'AM',
                          ),
                          11 => 
                          array (
                            'key' => 'Aruba',
                            'value' => 'AW',
                          ),
                          12 => 
                          array (
                            'key' => 'Ascension Island',
                            'value' => 'AC',
                          ),
                          13 => 
                          array (
                            'key' => 'Australia',
                            'value' => 'AU',
                          ),
                          14 => 
                          array (
                            'key' => 'Austria',
                            'value' => 'AT',
                          ),
                          15 => 
                          array (
                            'key' => 'Azerbaijan',
                            'value' => 'AZ',
                          ),
                          16 => 
                          array (
                            'key' => 'Bahamas',
                            'value' => 'BS',
                          ),
                          17 => 
                          array (
                            'key' => 'Bahrain',
                            'value' => 'BH',
                          ),
                          18 => 
                          array (
                            'key' => 'Bangladesh',
                            'value' => 'BD',
                          ),
                          19 => 
                          array (
                            'key' => 'Barbados',
                            'value' => 'BB',
                          ),
                          20 => 
                          array (
                            'key' => 'Belarus',
                            'value' => 'BY',
                          ),
                          21 => 
                          array (
                            'key' => 'Belgium',
                            'value' => 'BE',
                          ),
                          22 => 
                          array (
                            'key' => 'Belize',
                            'value' => 'BZ',
                          ),
                          23 => 
                          array (
                            'key' => 'Benin',
                            'value' => 'BJ',
                          ),
                          24 => 
                          array (
                            'key' => 'Bermuda',
                            'value' => 'BM',
                          ),
                          25 => 
                          array (
                            'key' => 'Bhutan',
                            'value' => 'BT',
                          ),
                          26 => 
                          array (
                            'key' => 'Bolivia',
                            'value' => 'BO',
                          ),
                          27 => 
                          array (
                            'key' => 'Bosnia and Herzegovina',
                            'value' => 'BA',
                          ),
                          28 => 
                          array (
                            'key' => 'Botswana',
                            'value' => 'BW',
                          ),
                          29 => 
                          array (
                            'key' => 'Bouvet Island',
                            'value' => 'BV',
                          ),
                          30 => 
                          array (
                            'key' => 'Brazil',
                            'value' => 'BR',
                          ),
                          31 => 
                          array (
                            'key' => 'British Indian Ocean Territory',
                            'value' => 'IO',
                          ),
                          32 => 
                          array (
                            'key' => 'British Virgin Islands',
                            'value' => 'VG',
                          ),
                          33 => 
                          array (
                            'key' => 'Brunei',
                            'value' => 'BN',
                          ),
                          34 => 
                          array (
                            'key' => 'Bulgaria',
                            'value' => 'BG',
                          ),
                          35 => 
                          array (
                            'key' => 'Burkina Faso',
                            'value' => 'BF',
                          ),
                          36 => 
                          array (
                            'key' => 'Burundi',
                            'value' => 'BI',
                          ),
                          37 => 
                          array (
                            'key' => 'Cambodia',
                            'value' => 'KH',
                          ),
                          38 => 
                          array (
                            'key' => 'Cameroon',
                            'value' => 'CM',
                          ),
                          39 => 
                          array (
                            'key' => 'Canada',
                            'value' => 'CA',
                          ),
                          40 => 
                          array (
                            'key' => 'Canary Islands',
                            'value' => 'IC',
                          ),
                          41 => 
                          array (
                            'key' => 'Cape Verde',
                            'value' => 'CV',
                          ),
                          42 => 
                          array (
                            'key' => 'Caribbean Netherlands',
                            'value' => 'BQ',
                          ),
                          43 => 
                          array (
                            'key' => 'Cayman Islands',
                            'value' => 'KY',
                          ),
                          44 => 
                          array (
                            'key' => 'Central African Republic',
                            'value' => 'CF',
                          ),
                          45 => 
                          array (
                            'key' => 'Ceuta and Melilla',
                            'value' => 'EA',
                          ),
                          46 => 
                          array (
                            'key' => 'Chad',
                            'value' => 'TD',
                          ),
                          47 => 
                          array (
                            'key' => 'Chile',
                            'value' => 'CL',
                          ),
                          48 => 
                          array (
                            'key' => 'China',
                            'value' => 'CN',
                          ),
                          49 => 
                          array (
                            'key' => 'Christmas Island',
                            'value' => 'CX',
                          ),
                          50 => 
                          array (
                            'key' => 'Clipperton Island',
                            'value' => 'CP',
                          ),
                          51 => 
                          array (
                            'key' => 'Cocos (Keeling) Islands',
                            'value' => 'CC',
                          ),
                          52 => 
                          array (
                            'key' => 'Colombia',
                            'value' => 'CO',
                          ),
                          53 => 
                          array (
                            'key' => 'Comoros',
                            'value' => 'KM',
                          ),
                          54 => 
                          array (
                            'key' => 'Congo - Brazzaville',
                            'value' => 'CG',
                          ),
                          55 => 
                          array (
                            'key' => 'Congo - Kinshasa',
                            'value' => 'CD',
                          ),
                          56 => 
                          array (
                            'key' => 'Cook Islands',
                            'value' => 'CK',
                          ),
                          57 => 
                          array (
                            'key' => 'Costa Rica',
                            'value' => 'CR',
                          ),
                          58 => 
                          array (
                            'key' => 'Croatia',
                            'value' => 'HR',
                          ),
                          59 => 
                          array (
                            'key' => 'Cuba',
                            'value' => 'CU',
                          ),
                          60 => 
                          array (
                            'key' => 'Cura??ao',
                            'value' => 'CW',
                          ),
                          61 => 
                          array (
                            'key' => 'Cyprus',
                            'value' => 'CY',
                          ),
                          62 => 
                          array (
                            'key' => 'Czech Republic',
                            'value' => 'CZ',
                          ),
                          63 => 
                          array (
                            'key' => 'C??te d???Ivoire',
                            'value' => 'CI',
                          ),
                          64 => 
                          array (
                            'key' => 'Denmark',
                            'value' => 'DK',
                          ),
                          65 => 
                          array (
                            'key' => 'Diego Garcia',
                            'value' => 'DG',
                          ),
                          66 => 
                          array (
                            'key' => 'Djibouti',
                            'value' => 'DJ',
                          ),
                          67 => 
                          array (
                            'key' => 'Dominica',
                            'value' => 'DM',
                          ),
                          68 => 
                          array (
                            'key' => 'Dominican Republic',
                            'value' => 'DO',
                          ),
                          69 => 
                          array (
                            'key' => 'Ecuador',
                            'value' => 'EC',
                          ),
                          70 => 
                          array (
                            'key' => 'Egypt',
                            'value' => 'EG',
                          ),
                          71 => 
                          array (
                            'key' => 'El Salvador',
                            'value' => 'SV',
                          ),
                          72 => 
                          array (
                            'key' => 'Equatorial Guinea',
                            'value' => 'GQ',
                          ),
                          73 => 
                          array (
                            'key' => 'Eritrea',
                            'value' => 'ER',
                          ),
                          74 => 
                          array (
                            'key' => 'Estonia',
                            'value' => 'EE',
                          ),
                          75 => 
                          array (
                            'key' => 'Ethiopia',
                            'value' => 'ET',
                          ),
                          76 => 
                          array (
                            'key' => 'European Union',
                            'value' => 'EU',
                          ),
                          77 => 
                          array (
                            'key' => 'Falkland Islands',
                            'value' => 'FK',
                          ),
                          78 => 
                          array (
                            'key' => 'Faroe Islands',
                            'value' => 'FO',
                          ),
                          79 => 
                          array (
                            'key' => 'Fiji',
                            'value' => 'FJ',
                          ),
                          80 => 
                          array (
                            'key' => 'Finland',
                            'value' => 'FI',
                          ),
                          81 => 
                          array (
                            'key' => 'France',
                            'value' => 'FR',
                          ),
                          82 => 
                          array (
                            'key' => 'French Guiana',
                            'value' => 'GF',
                          ),
                          83 => 
                          array (
                            'key' => 'French Polynesia',
                            'value' => 'PF',
                          ),
                          84 => 
                          array (
                            'key' => 'French Southern Territories',
                            'value' => 'TF',
                          ),
                          85 => 
                          array (
                            'key' => 'Gabon',
                            'value' => 'GA',
                          ),
                          86 => 
                          array (
                            'key' => 'Gambia',
                            'value' => 'GM',
                          ),
                          87 => 
                          array (
                            'key' => 'Georgia',
                            'value' => 'GE',
                          ),
                          88 => 
                          array (
                            'key' => 'Germany',
                            'value' => 'DE',
                          ),
                          89 => 
                          array (
                            'key' => 'Ghana',
                            'value' => 'GH',
                          ),
                          90 => 
                          array (
                            'key' => 'Gibraltar',
                            'value' => 'GI',
                          ),
                          91 => 
                          array (
                            'key' => 'Greece',
                            'value' => 'GR',
                          ),
                          92 => 
                          array (
                            'key' => 'Greenland',
                            'value' => 'GL',
                          ),
                          93 => 
                          array (
                            'key' => 'Grenada',
                            'value' => 'GD',
                          ),
                          94 => 
                          array (
                            'key' => 'Guadeloupe',
                            'value' => 'GP',
                          ),
                          95 => 
                          array (
                            'key' => 'Guam',
                            'value' => 'GU',
                          ),
                          96 => 
                          array (
                            'key' => 'Guatemala',
                            'value' => 'GT',
                          ),
                          97 => 
                          array (
                            'key' => 'Guernsey',
                            'value' => 'GG',
                          ),
                          98 => 
                          array (
                            'key' => 'Guinea',
                            'value' => 'GN',
                          ),
                          99 => 
                          array (
                            'key' => 'Guinea-Bissau',
                            'value' => 'GW',
                          ),
                          100 => 
                          array (
                            'key' => 'Guyana',
                            'value' => 'GY',
                          ),
                          101 => 
                          array (
                            'key' => 'Haiti',
                            'value' => 'HT',
                          ),
                          102 => 
                          array (
                            'key' => 'Heard & McDonald Islands',
                            'value' => 'HM',
                          ),
                          103 => 
                          array (
                            'key' => 'Honduras',
                            'value' => 'HN',
                          ),
                          104 => 
                          array (
                            'key' => 'Hong Kong SAR China',
                            'value' => 'HK',
                          ),
                          105 => 
                          array (
                            'key' => 'Hungary',
                            'value' => 'HU',
                          ),
                          106 => 
                          array (
                            'key' => 'Iceland',
                            'value' => 'IS',
                          ),
                          107 => 
                          array (
                            'key' => 'India',
                            'value' => 'IN',
                          ),
                          108 => 
                          array (
                            'key' => 'Indonesia',
                            'value' => 'ID',
                          ),
                          109 => 
                          array (
                            'key' => 'Iran',
                            'value' => 'IR',
                          ),
                          110 => 
                          array (
                            'key' => 'Iraq',
                            'value' => 'IQ',
                          ),
                          111 => 
                          array (
                            'key' => 'Ireland',
                            'value' => 'IE',
                          ),
                          112 => 
                          array (
                            'key' => 'Isle of Man',
                            'value' => 'IM',
                          ),
                          113 => 
                          array (
                            'key' => 'Israel',
                            'value' => 'IL',
                          ),
                          114 => 
                          array (
                            'key' => 'Italy',
                            'value' => 'IT',
                          ),
                          115 => 
                          array (
                            'key' => 'Jamaica',
                            'value' => 'JM',
                          ),
                          116 => 
                          array (
                            'key' => 'Japan',
                            'value' => 'JP',
                          ),
                          117 => 
                          array (
                            'key' => 'Jersey',
                            'value' => 'JE',
                          ),
                          118 => 
                          array (
                            'key' => 'Jordan',
                            'value' => 'JO',
                          ),
                          119 => 
                          array (
                            'key' => 'Kazakhstan',
                            'value' => 'KZ',
                          ),
                          120 => 
                          array (
                            'key' => 'Kenya',
                            'value' => 'KE',
                          ),
                          121 => 
                          array (
                            'key' => 'Kiribati',
                            'value' => 'KI',
                          ),
                          122 => 
                          array (
                            'key' => 'Kosovo',
                            'value' => 'XK',
                          ),
                          123 => 
                          array (
                            'key' => 'Kuwait',
                            'value' => 'KW',
                          ),
                          124 => 
                          array (
                            'key' => 'Kyrgyzstan',
                            'value' => 'KG',
                          ),
                          125 => 
                          array (
                            'key' => 'Laos',
                            'value' => 'LA',
                          ),
                          126 => 
                          array (
                            'key' => 'Latvia',
                            'value' => 'LV',
                          ),
                          127 => 
                          array (
                            'key' => 'Lebanon',
                            'value' => 'LB',
                          ),
                          128 => 
                          array (
                            'key' => 'Lesotho',
                            'value' => 'LS',
                          ),
                          129 => 
                          array (
                            'key' => 'Liberia',
                            'value' => 'LR',
                          ),
                          130 => 
                          array (
                            'key' => 'Libya',
                            'value' => 'LY',
                          ),
                          131 => 
                          array (
                            'key' => 'Liechtenstein',
                            'value' => 'LI',
                          ),
                          132 => 
                          array (
                            'key' => 'Lithuania',
                            'value' => 'LT',
                          ),
                          133 => 
                          array (
                            'key' => 'Luxembourg',
                            'value' => 'LU',
                          ),
                          134 => 
                          array (
                            'key' => 'Macau SAR China',
                            'value' => 'MO',
                          ),
                          135 => 
                          array (
                            'key' => 'Macedonia',
                            'value' => 'MK',
                          ),
                          136 => 
                          array (
                            'key' => 'Madagascar',
                            'value' => 'MG',
                          ),
                          137 => 
                          array (
                            'key' => 'Malawi',
                            'value' => 'MW',
                          ),
                          138 => 
                          array (
                            'key' => 'Malaysia',
                            'value' => 'MY',
                          ),
                          139 => 
                          array (
                            'key' => 'Maldives',
                            'value' => 'MV',
                          ),
                          140 => 
                          array (
                            'key' => 'Mali',
                            'value' => 'ML',
                          ),
                          141 => 
                          array (
                            'key' => 'Malta',
                            'value' => 'MT',
                          ),
                          142 => 
                          array (
                            'key' => 'Marshall Islands',
                            'value' => 'MH',
                          ),
                          143 => 
                          array (
                            'key' => 'Martinique',
                            'value' => 'MQ',
                          ),
                          144 => 
                          array (
                            'key' => 'Mauritania',
                            'value' => 'MR',
                          ),
                          145 => 
                          array (
                            'key' => 'Mauritius',
                            'value' => 'MU',
                          ),
                          146 => 
                          array (
                            'key' => 'Mayotte',
                            'value' => 'YT',
                          ),
                          147 => 
                          array (
                            'key' => 'Mexico',
                            'value' => 'MX',
                          ),
                          148 => 
                          array (
                            'key' => 'Micronesia',
                            'value' => 'FM',
                          ),
                          149 => 
                          array (
                            'key' => 'Moldova',
                            'value' => 'MD',
                          ),
                          150 => 
                          array (
                            'key' => 'Monaco',
                            'value' => 'MC',
                          ),
                          151 => 
                          array (
                            'key' => 'Mongolia',
                            'value' => 'MN',
                          ),
                          152 => 
                          array (
                            'key' => 'Montenegro',
                            'value' => 'ME',
                          ),
                          153 => 
                          array (
                            'key' => 'Montserrat',
                            'value' => 'MS',
                          ),
                          154 => 
                          array (
                            'key' => 'Morocco',
                            'value' => 'MA',
                          ),
                          155 => 
                          array (
                            'key' => 'Mozambique',
                            'value' => 'MZ',
                          ),
                          156 => 
                          array (
                            'key' => 'Myanmar (Burma)',
                            'value' => 'MM',
                          ),
                          157 => 
                          array (
                            'key' => 'Namibia',
                            'value' => 'NA',
                          ),
                          158 => 
                          array (
                            'key' => 'Nauru',
                            'value' => 'NR',
                          ),
                          159 => 
                          array (
                            'key' => 'Nepal',
                            'value' => 'NP',
                          ),
                          160 => 
                          array (
                            'key' => 'Netherlands',
                            'value' => 'NL',
                          ),
                          161 => 
                          array (
                            'key' => 'Netherlands Antilles',
                            'value' => 'AN',
                          ),
                          162 => 
                          array (
                            'key' => 'New Caledonia',
                            'value' => 'NC',
                          ),
                          163 => 
                          array (
                            'key' => 'New Zealand',
                            'value' => 'NZ',
                          ),
                          164 => 
                          array (
                            'key' => 'Nicaragua',
                            'value' => 'NI',
                          ),
                          165 => 
                          array (
                            'key' => 'Niger',
                            'value' => 'NE',
                          ),
                          166 => 
                          array (
                            'key' => 'Nigeria',
                            'value' => 'NG',
                          ),
                          167 => 
                          array (
                            'key' => 'Niue',
                            'value' => 'NU',
                          ),
                          168 => 
                          array (
                            'key' => 'Norfolk Island',
                            'value' => 'NF',
                          ),
                          169 => 
                          array (
                            'key' => 'North Korea',
                            'value' => 'KP',
                          ),
                          170 => 
                          array (
                            'key' => 'Northern Mariana Islands',
                            'value' => 'MP',
                          ),
                          171 => 
                          array (
                            'key' => 'Norway',
                            'value' => 'NO',
                          ),
                          172 => 
                          array (
                            'key' => 'Oman',
                            'value' => 'OM',
                          ),
                          173 => 
                          array (
                            'key' => 'Outlying Oceania',
                            'value' => 'QO',
                          ),
                          174 => 
                          array (
                            'key' => 'Pakistan',
                            'value' => 'PK',
                          ),
                          175 => 
                          array (
                            'key' => 'Palau',
                            'value' => 'PW',
                          ),
                          176 => 
                          array (
                            'key' => 'Palestinian Territories',
                            'value' => 'PS',
                          ),
                          177 => 
                          array (
                            'key' => 'Panama',
                            'value' => 'PA',
                          ),
                          178 => 
                          array (
                            'key' => 'Papua New Guinea',
                            'value' => 'PG',
                          ),
                          179 => 
                          array (
                            'key' => 'Paraguay',
                            'value' => 'PY',
                          ),
                          180 => 
                          array (
                            'key' => 'Peru',
                            'value' => 'PE',
                          ),
                          181 => 
                          array (
                            'key' => 'Philippines',
                            'value' => 'PH',
                          ),
                          182 => 
                          array (
                            'key' => 'Pitcairn Islands',
                            'value' => 'PN',
                          ),
                          183 => 
                          array (
                            'key' => 'Poland',
                            'value' => 'PL',
                          ),
                          184 => 
                          array (
                            'key' => 'Portugal',
                            'value' => 'PT',
                          ),
                          185 => 
                          array (
                            'key' => 'Puerto Rico',
                            'value' => 'PR',
                          ),
                          186 => 
                          array (
                            'key' => 'Qatar',
                            'value' => 'QA',
                          ),
                          187 => 
                          array (
                            'key' => 'Romania',
                            'value' => 'RO',
                          ),
                          188 => 
                          array (
                            'key' => 'Russia',
                            'value' => 'RU',
                          ),
                          189 => 
                          array (
                            'key' => 'Rwanda',
                            'value' => 'RW',
                          ),
                          190 => 
                          array (
                            'key' => 'R??union',
                            'value' => 'RE',
                          ),
                          191 => 
                          array (
                            'key' => 'Saint Barth??lemy',
                            'value' => 'BL',
                          ),
                          192 => 
                          array (
                            'key' => 'Saint Helena',
                            'value' => 'SH',
                          ),
                          193 => 
                          array (
                            'key' => 'Saint Kitts and Nevis',
                            'value' => 'KN',
                          ),
                          194 => 
                          array (
                            'key' => 'Saint Lucia',
                            'value' => 'LC',
                          ),
                          195 => 
                          array (
                            'key' => 'Saint Martin',
                            'value' => 'MF',
                          ),
                          196 => 
                          array (
                            'key' => 'Saint Pierre and Miquelon',
                            'value' => 'PM',
                          ),
                          197 => 
                          array (
                            'key' => 'Samoa',
                            'value' => 'WS',
                          ),
                          198 => 
                          array (
                            'key' => 'San Marino',
                            'value' => 'SM',
                          ),
                          199 => 
                          array (
                            'key' => 'Saudi Arabia',
                            'value' => 'SA',
                          ),
                          200 => 
                          array (
                            'key' => 'Senegal',
                            'value' => 'SN',
                          ),
                          201 => 
                          array (
                            'key' => 'Serbia',
                            'value' => 'RS',
                          ),
                          202 => 
                          array (
                            'key' => 'Seychelles',
                            'value' => 'SC',
                          ),
                          203 => 
                          array (
                            'key' => 'Sierra Leone',
                            'value' => 'SL',
                          ),
                          204 => 
                          array (
                            'key' => 'Singapore',
                            'value' => 'SG',
                          ),
                          205 => 
                          array (
                            'key' => 'Sint Maarten',
                            'value' => 'SX',
                          ),
                          206 => 
                          array (
                            'key' => 'Slovakia',
                            'value' => 'SK',
                          ),
                          207 => 
                          array (
                            'key' => 'Slovenia',
                            'value' => 'SI',
                          ),
                          208 => 
                          array (
                            'key' => 'Solomon Islands',
                            'value' => 'SB',
                          ),
                          209 => 
                          array (
                            'key' => 'Somalia',
                            'value' => 'SO',
                          ),
                          210 => 
                          array (
                            'key' => 'South Africa',
                            'value' => 'ZA',
                          ),
                          211 => 
                          array (
                            'key' => 'South Georgia & South Sandwich Islands',
                            'value' => 'GS',
                          ),
                          212 => 
                          array (
                            'key' => 'South Korea',
                            'value' => 'KR',
                          ),
                          213 => 
                          array (
                            'key' => 'South Sudan',
                            'value' => 'SS',
                          ),
                          214 => 
                          array (
                            'key' => 'Spain',
                            'value' => 'ES',
                          ),
                          215 => 
                          array (
                            'key' => 'Sri Lanka',
                            'value' => 'LK',
                          ),
                          216 => 
                          array (
                            'key' => 'St. Vincent & Grenadines',
                            'value' => 'VC',
                          ),
                          217 => 
                          array (
                            'key' => 'Sudan',
                            'value' => 'SD',
                          ),
                          218 => 
                          array (
                            'key' => 'Suriname',
                            'value' => 'SR',
                          ),
                          219 => 
                          array (
                            'key' => 'Svalbard and Jan Mayen',
                            'value' => 'SJ',
                          ),
                          220 => 
                          array (
                            'key' => 'Swaziland',
                            'value' => 'SZ',
                          ),
                          221 => 
                          array (
                            'key' => 'Sweden',
                            'value' => 'SE',
                          ),
                          222 => 
                          array (
                            'key' => 'Switzerland',
                            'value' => 'CH',
                          ),
                          223 => 
                          array (
                            'key' => 'Syria',
                            'value' => 'SY',
                          ),
                          224 => 
                          array (
                            'key' => 'S??o Tom?? and Pr??ncipe',
                            'value' => 'ST',
                          ),
                          225 => 
                          array (
                            'key' => 'Taiwan',
                            'value' => 'TW',
                          ),
                          226 => 
                          array (
                            'key' => 'Tajikistan',
                            'value' => 'TJ',
                          ),
                          227 => 
                          array (
                            'key' => 'Tanzania',
                            'value' => 'TZ',
                          ),
                          228 => 
                          array (
                            'key' => 'Thailand',
                            'value' => 'TH',
                          ),
                          229 => 
                          array (
                            'key' => 'Timor-Leste',
                            'value' => 'TL',
                          ),
                          230 => 
                          array (
                            'key' => 'Togo',
                            'value' => 'TG',
                          ),
                          231 => 
                          array (
                            'key' => 'Tokelau',
                            'value' => 'TK',
                          ),
                          232 => 
                          array (
                            'key' => 'Tonga',
                            'value' => 'TO',
                          ),
                          233 => 
                          array (
                            'key' => 'Trinidad and Tobago',
                            'value' => 'TT',
                          ),
                          234 => 
                          array (
                            'key' => 'Tristan da Cunha',
                            'value' => 'TA',
                          ),
                          235 => 
                          array (
                            'key' => 'Tunisia',
                            'value' => 'TN',
                          ),
                          236 => 
                          array (
                            'key' => 'Turkey',
                            'value' => 'TR',
                          ),
                          237 => 
                          array (
                            'key' => 'Turkmenistan',
                            'value' => 'TM',
                          ),
                          238 => 
                          array (
                            'key' => 'Turks and Caicos Islands',
                            'value' => 'TC',
                          ),
                          239 => 
                          array (
                            'key' => 'Tuvalu',
                            'value' => 'TV',
                          ),
                          240 => 
                          array (
                            'key' => 'U.S. Outlying Islands',
                            'value' => 'UM',
                          ),
                          241 => 
                          array (
                            'key' => 'U.S. Virgin Islands',
                            'value' => 'VI',
                          ),
                          242 => 
                          array (
                            'key' => 'Uganda',
                            'value' => 'UG',
                          ),
                          243 => 
                          array (
                            'key' => 'Ukraine',
                            'value' => 'UA',
                          ),
                          244 => 
                          array (
                            'key' => 'United Arab Emirates',
                            'value' => 'AE',
                          ),
                          245 => 
                          array (
                            'key' => 'United Kingdom',
                            'value' => 'GB',
                          ),
                          246 => 
                          array (
                            'key' => 'United States',
                            'value' => 'US',
                          ),
                          247 => 
                          array (
                            'key' => 'Unknown Region',
                            'value' => 'ZZ',
                          ),
                          248 => 
                          array (
                            'key' => 'Uruguay',
                            'value' => 'UY',
                          ),
                          249 => 
                          array (
                            'key' => 'Uzbekistan',
                            'value' => 'UZ',
                          ),
                          250 => 
                          array (
                            'key' => 'Vanuatu',
                            'value' => 'VU',
                          ),
                          251 => 
                          array (
                            'key' => 'Vatican City',
                            'value' => 'VA',
                          ),
                          252 => 
                          array (
                            'key' => 'Venezuela',
                            'value' => 'VE',
                          ),
                          253 => 
                          array (
                            'key' => 'Vietnam',
                            'value' => 'VN',
                          ),
                          254 => 
                          array (
                            'key' => 'Wallis and Futuna',
                            'value' => 'WF',
                          ),
                          255 => 
                          array (
                            'key' => 'Western Sahara',
                            'value' => 'EH',
                          ),
                          256 => 
                          array (
                            'key' => 'Yemen',
                            'value' => 'YE',
                          ),
                          257 => 
                          array (
                            'key' => 'Zambia',
                            'value' => 'ZM',
                          ),
                          258 => 
                          array (
                            'key' => 'Zimbabwe',
                            'value' => 'ZW',
                          ),
                          259 => 
                          array (
                            'key' => '??land Islands',
                            'value' => 'AX',
                          ),
                        ),
                         'width' => '',
                         'defaultValue' => NULL,
                         'optionsProviderClass' => NULL,
                         'optionsProviderData' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => '190',
                         'phpdocType' => 'string',
                         'dynamicOptions' => false,
                         'name' => 'countryCode',
                         'title' => 'Country',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                    ),
                     'locked' => false,
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 180,
                     'name' => 'Contact',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Contact',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Email::__set_state(array(
                         'fieldtype' => 'email',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 190,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'email',
                         'title' => 'E-Mail',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => NULL,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => NULL,
                         'name' => 'phone',
                         'title' => 'Phone',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                    ),
                     'locked' => false,
                  )),
                  4 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Consent::__set_state(array(
                     'fieldtype' => 'consent',
                     'defaultValue' => 0,
                     'queryColumnType' => 'tinyint(1)',
                     'columnType' => 
                    array (
                      'consent' => 'tinyint(1)',
                      'note' => 'int(11)',
                    ),
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Consent',
                     'width' => NULL,
                     'name' => 'profilingConsent',
                     'title' => 'Profiling consent',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                ),
                 'locked' => false,
                 'icon' => NULL,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Segment',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Segment',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                     'fieldtype' => 'manyToManyObjectRelation',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'queryColumnType' => 'text',
                     'phpdocType' => 'array',
                     'relationType' => true,
                     'visibleFields' => NULL,
                     'allowToCreateNewObject' => true,
                     'optimizedAdminLoading' => false,
                     'visibleFieldDefinitions' => 
                    array (
                    ),
                     'classes' => 
                    array (
                      0 => 
                      array (
                        'classes' => 'CustomerSegment',
                      ),
                    ),
                     'pathFormatterClass' => '',
                     'name' => 'manualSegments',
                     'title' => 'Manual segments',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                     'allowedClassId' => 'CustomerSegment',
                     'visibleFields' => 'name',
                     'columns' => 
                    array (
                      0 => 
                      array (
                        'type' => 'number',
                        'position' => 1,
                        'key' => 'created_timestamp',
                        'id' => 'extModel44202-1',
                        'label' => 'Segment created (Timestamp)',
                        'width' => 180,
                      ),
                      1 => 
                      array (
                        'type' => 'number',
                        'position' => 2,
                        'key' => 'application_counter',
                        'id' => 'extModel44202-2',
                        'width' => 180,
                        'label' => 'Segment application counter',
                      ),
                    ),
                     'columnKeys' => 
                    array (
                      0 => 'created_timestamp',
                      1 => 'application_counter',
                    ),
                     'fieldtype' => 'advancedManyToManyObjectRelation',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                     'enableBatchEdit' => NULL,
                     'allowMultipleAssignments' => NULL,
                     'visibleFieldDefinitions' => 
                    array (
                    ),
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'queryColumnType' => 'text',
                     'relationType' => true,
                     'allowToCreateNewObject' => true,
                     'optimizedAdminLoading' => false,
                     'classes' => 
                    array (
                      0 => 
                      array (
                        'classes' => 'CustomerSegment',
                      ),
                    ),
                     'pathFormatterClass' => '',
                     'name' => 'calculatedSegments',
                     'title' => 'Calculated segments',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                ),
                 'locked' => false,
                 'icon' => NULL,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Authentication/SSO',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Authentication/SSO',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
                     'fieldtype' => 'password',
                     'width' => '',
                     'queryColumnType' => 'varchar(190)',
                     'columnType' => 'varchar(190)',
                     'phpdocType' => 'string',
                     'algorithm' => 'password_hash',
                     'salt' => '',
                     'saltlocation' => 'back',
                     'name' => 'password',
                     'title' => 'Password',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                     'fieldtype' => 'manyToManyObjectRelation',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'queryColumnType' => 'text',
                     'phpdocType' => 'array',
                     'relationType' => true,
                     'visibleFields' => '',
                     'allowToCreateNewObject' => true,
                     'optimizedAdminLoading' => false,
                     'visibleFieldDefinitions' => 
                    array (
                    ),
                     'classes' => 
                    array (
                      0 => 
                      array (
                        'classes' => 'SsoIdentity',
                      ),
                    ),
                     'pathFormatterClass' => '',
                     'name' => 'ssoIdentities',
                     'title' => 'SSO Identities',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                ),
                 'locked' => false,
                 'icon' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Others',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Others',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => NULL,
                     'defaultValue' => NULL,
                     'queryColumnType' => 'varchar',
                     'columnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => 'string',
                     'regex' => '',
                     'unique' => false,
                     'showCharCount' => NULL,
                     'name' => 'idEncoded',
                     'title' => 'Encoded ID (cmfc)',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => true,
                     'visibleSearch' => true,
                     'defaultValueGenerator' => '',
                  )),
                ),
                 'locked' => false,
                 'icon' => NULL,
              )),
            ),
             'locked' => false,
          )),
        ),
         'locked' => false,
         'icon' => NULL,
      )),
    ),
     'locked' => false,
     'icon' => NULL,
  )),
   'icon' => '/bundles/pimcorecustomermanagementframework/icons/customer.svg',
   'previewUrl' => '',
   'group' => 'CustomerManagement',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => false,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
));
