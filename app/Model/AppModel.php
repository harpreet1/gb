<?php
App::uses('Model', 'Model');
class AppModel extends Model {

////////////////////////////////////////////////////////////

	public $recursive = -1;

	public $actsAs = array('Containable');

////////////////////////////////////////////////////////////

	public function creations($id = null) {
		$creations = array(
			'Artisinal Domestic' => 'Artisinal Domestic',
			'Artisinal Imported' => 'Artisinal Imported',
			'Packaged Domestic' => 'Packaged Domestic',
			'Packaged Imported' => 'Packaged Imported',
			'Farm Grown Domestic' => 'Farm Grown Domestic',
			'Farm Grown Imported' => 'Farm Grown Imported',
			'Packaged Gourmet Domestic' => 'Packaged Gourmet Domestic',
			'Packaged Gourmet Imported' => 'Packaged Gourmet Imported',
		);
		return $creations;
	}

////////////////////////////////////////////////////////////

	public function states($id = null) {
		$states = array(
			'AL' => 'Alabama',
			'AK' => 'Alaska',
			'AZ' => 'Arizona',
			'AR' => 'Arkansas',
			'CA' => 'California',
			'CO' => 'Colorado',
			'CT' => 'Connecticut',
			'DE' => 'Delaware',
			'DC' => 'District Of Columbia',
			'FL' => 'Florida',
			'GA' => 'Georgia',
			'HI' => 'Hawaii',
			'ID' => 'Idaho',
			'IL' => 'Illinois',
			'IN' => 'Indiana',
			'IA' => 'Iowa',
			'KS' => 'Kansas',
			'KY' => 'Kentucky',
			'LA' => 'Louisiana',
			'ME' => 'Maine',
			'MD' => 'Maryland',
			'MA' => 'Massachusetts',
			'MI' => 'Michigan',
			'MN' => 'Minnesota',
			'MS' => 'Mississippi',
			'MO' => 'Missouri',
			'MT' => 'Montana',
			'NE' => 'Nebraska',
			'NV' => 'Nevada',
			'NH' => 'New Hampshire',
			'NJ' => 'New Jersey',
			'NM' => 'New Mexico',
			'NY' => 'New York',
			'NC' => 'North Carolina',
			'ND' => 'North Dakota',
			'OH' => 'Ohio',
			'OK' => 'Oklahoma',
			'OR' => 'Oregon',
			'PA' => 'Pennsylvania',
			'RI' => 'Rhode Island',
			'SC' => 'South Carolina',
			'SD' => 'South Dakota',
			'TN' => 'Tennessee',
			'TX' => 'Texas',
			'UT' => 'Utah',
			'VT' => 'Vermont',
			'VA' => 'Virginia',
			'WA' => 'Washington',
			'WV' => 'West Virginia',
			'WI' => 'Wisconsin',
			'WY' => 'Wyoming',
			'AE' => 'AE',
			'AA' => 'AA',
			'AP' => 'AP'
		);
		if($id) {
			if(isset($states[$id])) {
				return $states[$id];
			}
		} else {
			return $states;
		}
	}

////////////////////////////////////////////////////////////

	public function countries($id = null) {
		$countries = array(
			'United States' => 'USA',
			'Canada' => 'Canada',
			'Afghanistan' => 'Afghanistan',
			'Albania' => 'Albania',
			'Algeria' => 'Algeria',
			'AS' => 'American Samoa',
			'AO' => 'Angola',
			'AG' => 'Antigua And Barbuda',
			'AR' => 'Argentina',
			'AM' => 'Armenia',
			'AW' => 'Aruba',
			'AU' => 'Australia',
			'AT' => 'Austria',
			'AZ' => 'Azerbaijan',
			'BS' => 'Bahamas',
			'BD' => 'Bangladesh',
			'BB' => 'Barbados',
			'BE' => 'Belgium',
			'BZ' => 'Belize',
			'BM' => 'Bermuda',
			'BO' => 'Bolivia',
			'BA' => 'Bosnia And Herzegovina',
			'BW' => 'Botswana',
			'BR' => 'Brazil',
			'IO' => 'British Indian Ocean Territory',
			'BG' => 'Bulgaria',
			'KH' => 'Cambodia',
			'CV' => 'Cape Verde',
			'KY' => 'Cayman Islands',
			'TD' => 'Chad',
			'CL' => 'Chile',
			'CN' => 'China',
			'CO' => 'Colombia',
			'CG' => 'Congo',
			'CR' => 'Costa Rica',
			'HR' => 'Croatia',
			'CU' => 'Cuba',
			'CY' => 'Cyprus',
			'CZ' => 'Czech Republic',
			'DK' => 'Denmark',
			'DO' => 'Dominican Republic',
			'EC' => 'Ecuador',
			'EG' => 'Egypt',
			'SV' => 'El Salvador',
			'EE' => 'Estonia',
			'ET' => 'Ethiopia',
			'FJ' => 'Fiji',
			'FI' => 'Finland',
			'FR' => 'France',
			'GE' => 'Georgia',
			'DE' => 'Germany',
			'GR' => 'Greece',
			'GP' => 'Guadeloupe',
			'GT' => 'Guatemala',
			'HT' => 'Haiti',
			'HN' => 'Honduras',
			'HK' => 'Hong Kong',
			'HU' => 'Hungary',
			'IS' => 'Iceland',
			'IN' => 'India',
			'ID' => 'Indonesia',
			'IR' => 'Iran',
			'IQ' => 'Iraq',
			'IE' => 'Ireland',
			'IL' => 'Israel',
			'IT' => 'Italy',
			'JM' => 'Jamaica',
			'JP' => 'Japan',
			'JO' => 'Jordan',
			'KE' => 'Kenya',
			'KR' => 'Korea',
			'KW' => 'Kuwait',
			'LA' => 'Laos',
			'LB' => 'Lebanon',
			'LR' => 'Liberia',
			'LT' => 'Lithuania',
			'LU' => 'Luxembourg',
			'MK' => 'Macedonia',
			'MG' => 'Madagascar',
			'MY' => 'Malaysia',
			'ML' => 'Mali',
			'MQ' => 'Martinique',
			'MU' => 'Mauritius',
			'MX' => 'Mexico',
			'MC' => 'Monaco',
			'MN' => 'Mongolia',
			'ME' => 'Montenegro',
			'MS' => 'Montserrat',
			'MA' => 'Morocco',
			'MZ' => 'Mozambique',
			'MM' => 'Myanmar',
			'NP' => 'Nepal',
			'NL' => 'Netherlands',
 			'NZ' => 'New Zealand',
			'NI' => 'Nicaragua',
			'NO' => 'Norway',
			'OM' => 'Oman',
			'PK' => 'Pakistan',
			'PS' => 'Palestinian Territory, Occupied',
			'PA' => 'Panama',
			'PG' => 'Papua New Guinea',
			'PE' => 'Peru',
			'PH' => 'Philippines',
			'PL' => 'Poland',
			'PT' => 'Portugal',
			'PR' => 'Puerto Rico',
			'RO' => 'Romania',
			'RU' => 'Russian Federation',
			'WS' => 'Samoa',
			'SA' => 'Saudi Arabia',
			'RS' => 'Serbia',
			'SG' => 'Singapore',
			'SK' => 'Slovakia',
			'SI' => 'Slovenia',
			'ZA' => 'South Africa',
			'ES' => 'Spain',
			'LK' => 'Sri Lanka',
			'SZ' => 'Swaziland',
			'SE' => 'Sweden',
			'CH' => 'Switzerland',
			'SY' => 'Syrian',
			'TW' => 'Taiwan',
			'TH' => 'Thailand',
			'TT' => 'Trinidad And Tobago',
			'TN' => 'Tunisia',
			'TR' => 'Turkey',
			'UG' => 'Uganda',
			'UA' => 'Ukraine',
			'GB' => 'United Kingdom',
			'UY' => 'Uruguay',
			'VE' => 'Venezuela',
			'VN' => 'Viet Nam',
		);
		if($id) {
			if(isset($countries[$id])) {
				return $countries[$id];
			}
		} else {
			return $countries;
		}
	}

////////////////////////////////////////////////////////////

}
