<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

class EDIConstants
{

    public const TODO_STATUSES = array(
		1 => 'Pending',
		2 => 'In Progress',
		3 => 'Complete');

    public const TODO_PRIORITIES = array(
		1 => 'High Priority',
		2 => 'Medium Priority',
		3 => 'Low Priority',
		4 => 'Future Task');

    /**
     * Skin tones
     */
    public const SKIN_TONES = array(
		'Fair' => 'Fair',
		'Medium' => 'Medium',
		'Olive' => 'Olive',
		'Light Brown' => 'Light Brown',
		'Dark Brown' => 'Dark Brown',
		'Black' => 'Black');


	public const BONE_STRUCTURES = array(
		'Small' => 'Small',
		'Medium' => 'Medium',
		'Large' => 'Large');

	public const EYE_COLORS = array(
		'Blue' => 'Blue',
		'Blue/Hazel' => 'Blue/Hazel',
		'Green' => 'Green',
		'Light Brown' => 'Light Brown',
		'Dark Brown' => 'Dark Brown',
		'Black' => 'Black');

	public const HAIR_COLORS = array(
		'Light Blonde' => 'Light Blonde',
		'Medium Blonde' => 'Medium Blonde',
		'Dark Blonde' => 'Dark Blonde',
		'Strawberry Blonde' => 'Strawberry Blonde',
		'Light Red' => 'Light Red',
		'Red' => 'Red',
		'Red/Brown' => 'Red/Brown',
		'Auburn' => 'Auburn',
		'Light Brown' => 'Light Brown',
		'Medium Brown' => 'Medium Brown',
		'Dark Brown' => 'Dark Brown',
		'Black' => 'Black');

	public const HAIR_TEXTURES = array(
		'Thick' => 'Thick',
		'Thin' => 'Thin');

	public const HAIR_STRUCTURES = array(
		'Straight' => 'Straight',
		'Curly' => 'Curly',
		'Frizzy' => 'Frizzy',
		'Wavy' => 'Wavy');

	/**
	 * Educations levels
	 */
	public const EDUCATION_LEVELS = array(
		'Some High School' => 'Some High School',
		'High School'      => 'High School',
		'Some College'     => 'Some College',
		'College'          => 'College',
		'Masters'          => 'Masters',
		'Ph.D +'           => 'Ph.D +'
		);

	/**
	 * Races
	 */

	public const RACES = array(
		'Mixed Race' => 'Mixed Race',
	    'African-American' => 'African-American',
		'Arctic' => 'Arctic',
		'Asian' => 'Asian',
		'Caucasian' => 'Caucasian',
		'Hispanic'  => 'Hispanic',
		'Indigenous Australian' => 'Indigenous Australian',
		'Native American' => 'Native American',
		'Pacific' => 'Pacific',
		'North East Asian' => 'North East Asian',
		'South East Asian' => 'South East Asian',
		'West African, Bushmen, Ethiopian' => 'West African, Bushmen, Ethiopian',
		'Other Race' => 'Other Race');



	/**
	 * True hair colors
	 */
	public const TRUE_HAIR_COLORS = array(
		'Blonde' => 'Blonde',
		'Brown'  => 'Brown',
		'Black'  => 'Black',
		'Red'    => 'Red');

	/**
	 * Educations
	 */

	public const EDUCATIONS = array(
		'High School' => array(
			"Some High School Eduction" => "Some High School Eduction",
	        "High School Graduate"  => "High School Graduate"
		),
		'Associate Education' => array(
	        "Some Associate Education"  => "Some Associate's Education",
	        "Associates Degree, Graduate"  => "Associates Degree, Graduate"
		),
		"College Education" => array(
	        "Some College Education"    => "Some College Education",
	        "College Degree, Graduate"    => "College Degree, Graduate"
		),
		"Master Education" => array(
	        "Some Master Education"  => "Some Master's Education",
	        "Masters Degree, Graduate"    => "Masters Degree, Graduate"
		),
		"Professional Education" => array(
	        "Some Professional Education (e.g. Ph.D., M.D., D.O....)" => "Some Professional Education (e.g. Ph.D., M.D., D.O....)",
	        "Professional Degree, Graduate (e.g. Ph.D., M.D., D.O...)" => "Professional Degree, Graduate (e.g. Ph.D., M.D., D.O....)"
		),
	);

	/**
	 * Locations
	 */
	public const LOCATIONS = array(
		'Does not matter' => 'Does not matter',
        'Not in the city in which I/we currently live (e.g., Atlanta, St. Louis....)'  => 'Not in the <b><u>city</u></b> in which I/we currently live (e.g., Atlanta, St. Louis....)',
        'Not in the state or province in which I/we currently live (e.g., Illinois, Quebec....)'  => 'Not in the <b><u>state</u></b> <b>or</b> <b><u>province</u></b> in which I/we currently live (e.g., Illinois, Quebec....)',
        'Not in the multi-state region in which I/we currently live (e.g., Pacific Northwest, Midwest...)'    => 'Not in the <b><u>multi-state region</u></b> in which I/we currently live (e.g., Pacific Northwest, Midwest...)'
	);


	/**
	 * Religions
	 */
	public const RELIGIONS = array(
		'Christian'      => 'Christian',
        'Catholic'       => 'Catholic',
		'Jewish'         => 'Jewish',
		'Muslim/Islam'   => 'Muslim/Islam',
		'Buddhist'       => 'Buddhist',
		'Hindu'          => 'Hindu',
		'Agnostic'       => 'Agnostic',
		'No Religion'    => 'No Religion',
		'Atheist'        => 'Atheist');


	public const APPLICANT_TYPES = array(
		'Egg Donor' => 'Egg Donor',
		'Gestational Surrogate' => 'Gestational Surrogate',
		'Conventional Surrogate' => 'Conventional Surrogate');


	/**
	 * Marital statuses
	 */
	public const MARITAL_STATUS = array(
		'Married' => array(
			'Married Heterosexuals' => 'Married Heterosexuals',
			'Married Lesbians' => 'Married Lesbians',
			'Married Homosexuals' => 'Married Homosexuals'),
		'Unmarried' => array(
	        'Unmarried Heterosexual partners' => 'Unmarried Heterosexual partners',
			'Unmarried Lesbian partners' => 'Unmarried Lesbian partners',
			'Unmarried Homosexual partners' => 'Unmarried Homosexual partners'),
		'Single' => array(
	        'Single & Heterosexual' => 'Single & Heterosexual',
			'Single & Lesbian' => 'Single & Lesbian',
			'Single & Homosexual' => 'Single & Homosexual')
		);

	public const PARTNER_STATUS =  array(
		'Married' => 'Married',
		'Life Partnership' => 'Life Partnership',
		'Widowed' => 'Widowed',
		'Single' => 'Single',
		'Boyfriend' => 'Boyfriend',
		'Girlfriend' => 'Girlfriend'
	);

	public const STATES_REGIONS = array(
        'AL' => 'Southeast',
		'AK' => 'West',
	    'AZ' => 'Southwest',
	    'AR' => 'Southeast',
	    'CA' => 'West',
	    'CO' => 'West',
	    'CT' => 'Northeast',
	    'DE' => 'Northeast',
	    'DC' => 'South',
	    'FL' => 'South',
		'GA' => 'South',
		'HI' => 'West',
		'ID' => 'West',
		'IL' => 'Midwest',
		'IN' => 'Midwest',
		'IA' => 'Midwest',
		'KS' => 'Midwest',
		'KY' => 'South',
		'LA' => 'South',
		'ME' => 'Northeast',
		'MD' => 'South',
		'MA' => 'Northeast',
		'MI' => 'Midwest',
		'MN' => 'Midwest',
		'MS' => 'Southeast',
		'MO' => 'Midwest',
		'MT' => 'West',
		'NE' => 'Midwest',
		'NV' => 'West',
		'NH' => 'Northeast',
		'NJ' => 'Northeast',
		'NM' => 'Southwest',
		'NY' => 'Northeast',
		'NC' => 'Southeast',
		'ND' => 'Midwest',
		'OH' => 'Midwest',
		'OK' => 'Southwest',
		'OR' => 'West',
		'PA' => 'Northeast',
		'RI' => 'Northeast',
		'SC' => 'Southeast',
		'SD' => 'Midwest',
		'TN' => 'Southeast',
		'TX' => 'Southwest',
		'UT' => 'West',
		'VT' => 'Northeast',
		'VA' => 'Southeast',
		'WA' => 'West',
		'WV' => 'Southeast',
		'WI' => 'Midwest',
		'WY' => 'West'
		);

	public const STATES = array(
		'AL'=>"Alabama",  'AK'=>"Alaska",  'AZ'=>"Arizona",  'AR'=>"Arkansas",
		'CA'=>"California",  'CO'=>"Colorado",  'CT'=>"Connecticut",  'DE'=>"Delaware",
		'DC'=>"District Of Columbia", 'FL'=>"Florida",  'GA'=>"Georgia",  'HI'=>"Hawaii",
		'ID'=>"Idaho",  'IL'=>"Illinois",  'IN'=>"Indiana",  'IA'=>"Iowa",
		'KS'=>"Kansas",  'KY'=>"Kentucky", 'LA'=>"Louisiana", 'ME'=>"Maine", 'MD'=>"Maryland",
		'MA'=>"Massachusetts",  'MI'=>"Michigan",  'MN'=>"Minnesota",  'MS'=>"Mississippi",'MO'=>"Missouri",
		'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",
		'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",
		'OK'=>"Oklahoma",  'OR'=>"Oregon",  'PA'=>"Pennsylvania",  'RI'=>"Rhode Island",
		'SC'=>"South Carolina",
		'SD'=>"South Dakota",
		'TN'=>"Tennessee",
		'TX'=>"Texas",
		'UT'=>"Utah",
		'VT'=>"Vermont",
		'VA'=>"Virginia",
		'WA'=>"Washington",
		'WV'=>"West Virginia",
		'WI'=>"Wisconsin",
		'WY'=>"Wyoming");

	public const BLOOD_TYPES = array(
		'Don\'t Know' => 'Don\'t Know','A Positive' => 'A Positive', 'A Negative' => 'A Negative', 'A Unknown' => 'A Unknown',
		'B Positive' => 'B Positive', 'B Negative' => 'B Negative', 'B Unknown' => 'B Unknown',
		'AB Positive' => 'AB Positive', 'AB Negative' => 'AB Negative', 'AB Unknown' => 'AB Unknown',
		'O Positive' => 'O Positive', 'O Negative' => 'O Negative', 'O Unknown' => 'O Unknown');

	public const COUNTRIES = array(
        'ad' =>    'Andorra',
        'ae' =>    'United Arab Emirates',
        'af' =>    'Afghanistan',
        'ag' =>    'Antigua and Barbuda',
        'ai' =>    'Anguilla',
        'al' =>    'Albania',
        'am' =>    'Armenia',
        'an' =>    'Netherlands Antilles',
        'ao' =>    'Angola',
        'aq' =>    'Antarctica',
        'ar' =>    'Argentina',
        'as' =>    'American Samoa',
        'at' =>    'Austria',
        'au' =>    'Australia',
        'aw' =>    'Aruba',
        'az' =>    'Azerbaijan',
        'ba' =>    'Bosnia Hercegovina',
        'bb' =>    'Barbados',
        'bd' =>    'Bangladesh',
        'be' =>    'Belgium',
        'bf' =>    'Burkina Faso',
        'bg' =>    'Bulgaria',
        'bh' =>    'Bahrain',
        'bi' =>    'Burundi',
        'bj' =>    'Benin',
        'bm' =>    'Bermuda',
        'bn' =>    'Brunei Darussalam',
        'bo' =>    'Bolivia',
        'br' =>    'Brazil',
        'bs' =>    'Bahamas',
        'bt' =>    'Bhutan',
        'bv' =>    'Bouvet Island',
        'bw' =>    'Botswana',
        'by' =>    'Belarus (Byelorussia)',
        'bz' =>    'Belize',
        'ca' =>    'Canada',
        'cc' =>    'Cocos Islands',
        'cd' =>    'Congo, The Democratic Republic of the',
        'cf' =>    'Central African Republic',
        'cg' =>    'Congo',
        'ch' =>    'Switzerland',
        'ci' =>    'Ivory Coast',
        'ck' =>    'Cook Islands',
        'cl' =>    'Chile',
        'cm' =>    'Cameroon',
        'cn' =>    'China',
        'co' =>    'Colombia',
        'cr' =>    'Costa Rica',
        'cs' =>    'Czechoslovakia',
        'cu' =>    'Cuba',
        'cv' =>    'Cape Verde',
        'cx' =>    'Christmas Island',
        'cy' =>    'Cyprus',
        'cz' =>    'Czech Republic',
        'de' =>    'Germany',
        'dj' =>    'Djibouti',
        'dk' =>    'Denmark',
        'dm' =>    'Dominica',
        'do' =>    'Dominican Republic',
        'dz' =>    'Algeria',
        'ec' =>    'Ecuador',
        'ee' =>    'Estonia',
        'eg' =>    'Egypt',
        'eh' =>    'Western Sahara',
        'er' =>    'Eritrea',
        'es' =>    'Spain',
        'et' =>    'Ethiopia',
        'fi' =>    'Finland',
        'fj' =>    'Fiji',
        'fk' =>    'Falkland Islands',
        'fm' =>    'Micronesia',
        'fo' =>    'Faroe Islands',
        'fr' =>    'France',
        'fx' =>    'France, Metropolitan FX',
        'ga' =>    'Gabon',
        'gb' =>    'United Kingdom (Great Britain)',
        'gd' =>    'Grenada',
        'ge' =>    'Georgia',
        'gf' =>    'French Guiana',
        'gh' =>    'Ghana',
        'gi' =>    'Gibraltar',
        'gl' =>    'Greenland',
        'gm' =>    'Gambia',
        'gn' =>    'Guinea',
        'gp' =>    'Guadeloupe',
        'gq' =>    'Equatorial Guinea',
        'gr' =>    'Greece',
        'gs' =>    'South Georgia and the South Sandwich Islands',
        'gt' =>    'Guatemala',
        'gu' =>    'Guam',
        'gw' =>    'Guinea-bissau',
        'gy' =>    'Guyana',
        'hk' =>    'Hong Kong',
        'hm' =>    'Heard and McDonald Islands',
        'hn' =>    'Honduras',
        'hr' =>    'Croatia',
        'ht' =>    'Haiti',
        'hu' =>    'Hungary',
        'id' =>    'Indonesia',
        'ie' =>    'Ireland',
        'il' =>    'Israel',
        'in' =>    'India',
        'io' =>    'British Indian Ocean Territory',
        'iq' =>    'Iraq',
        'ir' =>    'Iran',
        'is' =>    'Iceland',
        'it' =>    'Italy',
        'jm' =>    'Jamaica',
        'jo' =>    'Jordan',
        'jp' =>    'Japan',
        'ke' =>    'Kenya',
        'kg' =>    'Kyrgyzstan',
        'kh' =>    'Cambodia',
        'ki' =>    'Kiribati',
        'km' =>    'Comoros',
        'kn' =>    'Saint Kitts and Nevis',
        'kp' =>    'North Korea',
        'kr' =>    'South Korea',
        'kw' =>    'Kuwait',
        'ky' =>    'Cayman Islands',
        'kz' =>    'Kazakhstan',
        'la' =>    'Laos',
        'lb' =>    'Lebanon',
        'lc' =>    'Saint Lucia',
        'li' =>    'Lichtenstein',
        'lk' =>    'Sri Lanka',
        'lr' =>    'Liberia',
        'ls' =>    'Lesotho',
        'lt' =>    'Lithuania',
        'lu' =>    'Luxembourg',
        'lv' =>    'Latvia',
        'ly' =>    'Libya',
        'ma' =>    'Morocco',
        'mc' =>    'Monaco',
        'md' =>    'Moldova Republic',
        'mg' =>    'Madagascar',
        'mh' =>    'Marshall Islands',
        'mk' =>    'Macedonia, The Former Yugoslav Republic of',
        'ml' =>    'Mali',
        'mm' =>    'Myanmar',
        'mn' =>    'Mongolia',
        'mo' =>    'Macau',
        'mp' =>    'Northern Mariana Islands',
        'mq' =>    'Martinique',
        'mr' =>    'Mauritania',
        'ms' =>    'Montserrat',
        'mt' =>    'Malta',
        'mu' =>    'Mauritius',
        'mv' =>    'Maldives',
        'mw' =>    'Malawi',
        'mx' =>    'Mexico',
        'my' =>    'Malaysia',
        'mz' =>    'Mozambique',
        'na' =>    'Namibia',
        'nc' =>    'New Caledonia',
        'ne' =>    'Niger',
        'nf' =>    'Norfolk Island',
        'ng' =>    'Nigeria',
        'ni' =>    'Nicaragua',
        'nl' =>    'Netherlands',
        'no' =>    'Norway',
        'np' =>    'Nepal',
        'nr' =>    'Nauru',
        'nt' =>    'Neutral Zone',
        'nu' =>    'Niue',
        'nz' =>    'New Zealand',
        'om' =>    'Oman',
        'pa' =>    'Panama',
        'pe' =>    'Peru',
        'pf' =>    'French Polynesia',
        'pg' =>    'Papua New Guinea',
        'ph' =>    'Philippines',
        'pk' =>    'Pakistan',
        'pl' =>    'Poland',
        'pm' =>    'St. Pierre and Miquelon',
        'pn' =>    'Pitcairn',
        'pr' =>    'Puerto Rico',
        'pt' =>    'Portugal',
        'pw' =>    'Palau',
        'py' =>    'Paraguay',
        'qa' =>    'Qatar',
        're' =>    'Reunion',
        'ro' =>    'Romania',
        'ru' =>    'Russia',
        'rw' =>    'Rwanda',
        'sa' =>    'Saudi Arabia',
        'sb' =>    'Solomon Islands',
        'sc' =>    'Seychelles',
        'sd' =>    'Sudan',
        'se' =>    'Sweden',
        'sg' =>    'Singapore',
        'sh' =>    'St. Helena',
        'si' =>    'Slovenia',
        'sj' =>    'Svalbard and Jan Mayen Islands',
        'sk' =>    'Slovakia (Slovak Republic)',
        'sl' =>    'Sierra Leone',
        'sm' =>    'San Marino',
        'sn' =>    'Senegal',
        'so' =>    'Somalia',
        'sr' =>    'Suriname',
        'st' =>    'Sao Tome and Principe',
        'sv' =>    'El Salvador',
        'sy' =>    'Syria',
        'sz' =>    'Swaziland',
        'tc' =>    'Turks and Caicos Islands',
        'td' =>    'Chad',
        'tf' =>    'French Southern Territories',
        'tg' =>    'Togo',
        'th' =>    'Thailand',
        'tj' =>    'Tajikistan',
        'tk' =>    'Tokelau',
        'tm' =>    'Turkmenistan',
        'tn' =>    'Tunisia',
        'to' =>    'Tonga',
        'tp' =>    'East Timor',
        'tr' =>    'Turkey',
        'tt' =>    'Trinidad, Tobago',
        'tv' =>    'Tuvalu',
        'tw' =>    'Taiwan',
        'tz' =>    'Tanzania',
        'ua' =>    'Ukraine',
        'ug' =>    'Uganda',
        'uk' =>    'United Kingdom',
        'um' =>    'United States Minor Islands',
        'us' =>    'United States of America',
        'uy' =>    'Uruguay',
        'uz' =>    'Uzbekistan',
        'va' =>    'Vatican City',
        'vc' =>    'Saint Vincent, Grenadines',
        've' =>    'Venezuela',
        'vg' =>    'Virgin Islands (British)',
        'vi' =>    'Virgin Islands (USA)',
        'vn' =>    'Viet Nam',
        'vu' =>    'Vanuatu',
        'wf' =>    'Wallis and Futuna Islands',
        'ws' =>    'Samoa',
        'ye' =>    'Yemen',
        'yt' =>    'Mayotte',
        'yu' =>    'Yugoslavia',
        'za' =>    'South Africa',
        'zm' =>    'Zambia',
        'zr' =>    'Zaire',
        'zw' =>    'Zimbabwe');

	public const YES_NO = array(
		'Yes' => 'Yes',
		'No' => 'No',
	);

	public const NO_YES = array(
		'No' => 'No',
		'Yes' => 'Yes',
	);

    public const HOW_FOUND_EDI = array(
        'Ad' => 'Ad',
        'Agency' => 'Agency (e.g. Adoption, Surrogacy, third-party',
        'Article' => 'Article / News Story',
        'Attorney' => 'Attorney',
        'Internet Search' => 'Internet Search',
        'Physician Referral' => 'Physician Referral',
        'Patient Referral' => 'Patient Referral',
        'Presentation' => 'Presentation',
        'Social Media' => 'Social Media',
        'Other Website' => 'Other Website',
        'Other' => 'Other'
    );
    public const STIPULATION_TYPE_MARITAL_STATUS = 1;
    public const STIPULATION_TYPE_RELIGION = 2;
    public const STIPULATION_TYPE_RACE = 3;
    public const STIPULATION_TYPE_EDUCATION = 4;
    public const STIPULATION_TYPE_LOCATION = 5;
    public const STIPULATION_TYPE_OTHER = 6;

    public const NUMBER_OF_PICTURES_DEFAULT = 3;
}
