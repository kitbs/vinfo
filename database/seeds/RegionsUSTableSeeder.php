<?php

use Vinfo\Region;

class RegionsUSTableSeeder extends RegionsTableSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$country = Region::whereTranslation('name', 'United States', 'en')->first();
    	$regions = [];
    	$depths  = [2, 11, 11, 11, 11, 11, 11, 11];

    	$regions['Alabama']                                                                         = [];
    	$regions['Alaska']                                                                          = [];
    	$regions['Arizona']                                                              = [];
    	$regions['Arizona']['Sonoita']                                                              = [];
    	$regions['Arkansas']['Altus']                                                               = [];
    	$regions['Arkansas']['Arkansas Mountain']                                                   = [];
    	$regions['Arkansas']['Ozark Mountain']                                                      = [];
    	$regions['California']['Ben Lomond Mountain']                                               = [];
    	$regions['California']['Central Coast']['Arroyo Grande Valley']                             = [];
    	$regions['California']['Central Coast']['Arroyo Seco']                                      = [];
    	$regions['California']['Central Coast']['Ballard Canyon']                                   = [];
    	$regions['California']['Central Coast']['Carmel Valley']                                    = [];
    	$regions['California']['Central Coast']['Chalone']                                          = [];
    	$regions['California']['Central Coast']['Cienega Valley']                                   = [];
    	$regions['California']['Central Coast']['Edna Valley']                                      = [];
    	$regions['California']['Central Coast']['Hames Valley']                                     = [];
    	$regions['California']['Central Coast']['Happy Canyon of Santa Barbara']                    = [];
    	$regions['California']['Central Coast']['Lime Kiln Valley']                                 = [];
    	$regions['California']['Central Coast']['Livermore Valley']                                 = [];
    	$regions['California']['Central Coast']['Monterey']                                         = [];
    	$regions['California']['Central Coast']['Mt. Harlan']                                       = [];
    	$regions['California']['Central Coast']['Pacheco Pass']                                     = [];
    	$regions['California']['Central Coast']['Paicines']                                         = [];
    	$regions['California']['Central Coast']['Paso Robles']['Adelaida District']                 = [];
    	$regions['California']['Central Coast']['Paso Robles']['Creston District']                  = [];
    	$regions['California']['Central Coast']['Paso Robles']['El Pomar District']                 = [];
    	$regions['California']['Central Coast']['Paso Robles']['Paso Robles Estrella District']     = [];
    	$regions['California']['Central Coast']['Paso Robles']['Paso Robles Geneseo District']      = [];
    	$regions['California']['Central Coast']['Paso Robles']['Paso Robles Highlands District']    = [];
    	$regions['California']['Central Coast']['Paso Robles']['Paso Robles Willow Creek District'] = [];
    	$regions['California']['Central Coast']['Paso Robles']['San Juan Creek']                    = [];
    	$regions['California']['Central Coast']['Paso Robles']['San Miguel District']               = [];
    	$regions['California']['Central Coast']['Paso Robles']['Santa Margarita Ranch']             = [];
    	$regions['California']['Central Coast']['Paso Robles']['Templeton Gap District']            = [];
    	$regions['California']['Central Coast']['San Antonio Valley']                               = [];
    	$regions['California']['Central Coast']['San Benito']                                       = [];
    	$regions['California']['Central Coast']['San Bernabe']                                      = [];
    	$regions['California']['Central Coast']['San Francisco Bay']                                = [];
    	$regions['California']['Central Coast']['San Lucas']                                        = [];
    	$regions['California']['Central Coast']['San Ysidro District']                              = [];
    	$regions['California']['Central Coast']['Santa Clara Valley']                               = [];
    	$regions['California']['Central Coast']['Santa Lucia Highlands']                            = [];
    	$regions['California']['Central Coast']['Santa Maria Valley']                               = [];
    	$regions['California']['Central Coast']['Santa Ynez Valley']                                = [];
    	$regions['California']['Central Coast']['Sta. Rita Hills']                                  = [];
    	$regions['California']['Central Coast']['York Mountain']                                    = [];
    	$regions['California']['Central Valley']['Alta Mesa']                                       = [];
    	$regions['California']['Central Valley']['Borden Ranch']                                    = [];
    	$regions['California']['Central Valley']['Capay Valley']                                    = [];
    	$regions['California']['Central Valley']['Clarksburg']                                      = [];
    	$regions['California']['Central Valley']['Clements Hills']                                  = [];
    	$regions['California']['Central Valley']['Cosumnes River']                                  = [];
    	$regions['California']['Central Valley']['Diablo Grande']                                   = [];
    	$regions['California']['Central Valley']['Dunnigan Hills']                                  = [];
    	$regions['California']['Central Valley']['Jahant']                                          = [];
    	$regions['California']['Central Valley']['Lodi']                                            = [];
    	$regions['California']['Central Valley']['Madera']                                          = [];
    	$regions['California']['Central Valley']['Merritt Island']                                  = [];
    	$regions['California']['Central Valley']['Mokelumne River']                                 = [];
    	$regions['California']['Central Valley']['River Junction']                                  = [];
    	$regions['California']['Central Valley']['Salado Creek']                                    = [];
    	$regions['California']['Central Valley']['Sloughhouse']                                     = [];
    	$regions['California']['Central Valley']['Tracy Hills']                                     = [];
    	$regions['California']['Klamath Mountains']['Seiad Valley']                                 = [];
    	$regions['California']['Klamath Mountains']['Trinity Lakes']                                = [];
    	$regions['California']['Klamath Mountains']['Willow Creek']                                 = [];
    	$regions['California']['Manton Valley']                                                     = [];
    	$regions['California']['North Coast']['Alexander Valley']                                   = [];
    	$regions['California']['North Coast']['Anderson Valley']                                    = [];
    	$regions['California']['North Coast']['Atlas Peak']                                         = [];
    	$regions['California']['North Coast']['Benmore Valley']                                     = [];
    	$regions['California']['North Coast']['Bennett Valley']                                     = [];
    	$regions['California']['North Coast']['Big Valley District–Lake County']                    = [];
    	$regions['California']['North Coast']['Calistoga']                                          = [];
    	$regions['California']['North Coast']['Chalk Hill']                                         = [];
    	$regions['California']['North Coast']['Chiles Valley']                                      = [];
    	$regions['California']['North Coast']['Clear Lake']                                         = [];
    	$regions['California']['North Coast']['Cole Ranch']                                         = [];
    	$regions['California']['North Coast']['Coombsville']                                        = [];
    	$regions['California']['North Coast']['Covelo']                                             = [];
    	$regions['California']['North Coast']['Diamond Mountain District']                          = [];
    	$regions['California']['North Coast']['Dos Rios']                                           = [];
    	$regions['California']['North Coast']['Dry Creek Valley']                                   = [];
    	$regions['California']['North Coast']['Eagle Peak Mendocino County']                        = [];
    	$regions['California']['North Coast']['Fort Ross–Seaview']                                  = [];
    	$regions['California']['North Coast']['Fountaingrove District']                             = [];
    	$regions['California']['North Coast']['Green Valley of Russian River Valley']               = [];
    	$regions['California']['North Coast']['Guenoc Valley']                                      = [];
    	$regions['California']['North Coast']['High Valley']                                        = [];
    	$regions['California']['North Coast']['Howell Mountain']                                    = [];
    	$regions['California']['North Coast']['Kelsey Bench–Lake County']                           = [];
    	$regions['California']['North Coast']['Knights Valley']                                     = [];
    	$regions['California']['North Coast']['Los Carneros']                                       = [];
    	$regions['California']['North Coast']['McDowell Valley']                                    = [];
    	$regions['California']['North Coast']['Mendocino']                                          = [];
    	$regions['California']['North Coast']['Mendocino Ridge']                                    = [];
    	$regions['California']['North Coast']['Moon Mountain District Sonoma County']               = [];
    	$regions['California']['North Coast']['Mt. Veeder']                                         = [];
    	$regions['California']['North Coast']['Napa Valley']                                        = [];
    	$regions['California']['North Coast']['Northern Sonoma']                                    = [];
    	$regions['California']['North Coast']['Oak Knoll District of Napa Valley']                  = [];
    	$regions['California']['North Coast']['Oakville']                                           = [];
    	$regions['California']['North Coast']['Pine Mountain–Cloverdale Peak']                      = [];
    	$regions['California']['North Coast']['Potter Valley']                                      = [];
    	$regions['California']['North Coast']['Red Hills Lake County']                              = [];
    	$regions['California']['North Coast']['Redwood Valley']                                     = [];
    	$regions['California']['North Coast']['Rockpile']                                           = [];
    	$regions['California']['North Coast']['Russian River Valley']                               = [];
    	$regions['California']['North Coast']['Rutherford']                                         = [];
    	$regions['California']['North Coast']['Solano County Green Valley']                         = [];
    	$regions['California']['North Coast']['Sonoma Coast']                                       = [];
    	$regions['California']['North Coast']['Sonoma Mountain']                                    = [];
    	$regions['California']['North Coast']['Sonoma Valley']                                      = [];
    	$regions['California']['North Coast']['Spring Mountain District']                           = [];
    	$regions['California']['North Coast']['St. Helena']                                         = [];
    	$regions['California']['North Coast']['Stags Leap District']                                = [];
    	$regions['California']['North Coast']['Suisun Valley']                                      = [];
    	$regions['California']['North Coast']['Wild Horse Valley']                                  = [];
    	$regions['California']['North Coast']['Yorkville Highlands']                                = [];
    	$regions['California']['North Coast']['Yountville']                                         = [];
    	$regions['California']['Santa Cruz Mountains']                                              = [];
    	$regions['California']['Sierra Foothills']['California Shenandoah Valley']                  = [];
    	$regions['California']['Sierra Foothills']['El Dorado']                                     = [];
    	$regions['California']['Sierra Foothills']['Fair Play']                                     = [];
    	$regions['California']['Sierra Foothills']['Fiddletown']                                    = [];
    	$regions['California']['Sierra Foothills']['North Yuba']                                    = [];
    	$regions['California']['South Coast']['Antelope Valley of the California High Desert']      = [];
    	$regions['California']['South Coast']['Cucamonga Valley']                                   = [];
    	$regions['California']['South Coast']['Leona Valley']                                       = [];
    	$regions['California']['South Coast']['Malibu Coast']['Malibu–Newton Canyon']               = [];
    	$regions['California']['South Coast']['Malibu Coast']['Saddle Rock–Malibu']                 = [];
    	$regions['California']['South Coast']['Ramona Valley']                                      = [];
    	$regions['California']['South Coast']['San Pasqual Valley']                                 = [];
    	$regions['California']['South Coast']['Sierra Pelona Valley']                               = [];
    	$regions['California']['South Coast']['Temecula Valley']                                    = [];
    	$regions['California']['Squaw Valley–Miramonte']                                            = [];
    	$regions['Colorado']['Grand Valley']                                                        = [];
    	$regions['Colorado']['West Elks']                                                           = [];
    	$regions['Connecticut']['Southeastern New England']                                         = [];
    	$regions['Connecticut']['Western Connecticut Highlands']                                    = [];
    	$regions['Delaware']                                                                        = [];
    	$regions['Florida']                                                                         = [];
    	$regions['Georgia']['Upper Hiwassee Highlands']                                             = [];
    	$regions['Hawaii']                                                                          = [];
    	$regions['Idaho']['Snake River Valley']                                                     = [];
    	$regions['Illinois']['Shawnee Hills']                                                       = [];
    	$regions['Illinois']['Upper Mississippi River Valley']                                      = [];
    	$regions['Indiana']['Indiana Uplands']                                                      = [];
    	$regions['Indiana']['Ohio River Valley']                                                    = [];
    	$regions['Iowa']['Upper Mississippi River Valley']                                          = '_SHORTCUT';
    	$regions['Kansas']                                                                          = [];
    	$regions['Kentucky']['Ohio River Valley']                                                   = '_SHORTCUT';
    	$regions['Louisiana']['Mississippi Delta']                                                  = [];
    	$regions['Maine']                                                                           = [];
    	$regions['Maryland']['Catoctin']                                                            = [];
    	$regions['Maryland']['Cumberland Valley']                                                   = [];
    	$regions['Maryland']['Linganore']                                                           = [];
    	$regions['Massachusetts']['Martha’s Vineyard']                                              = [];
    	$regions['Massachusetts']['Southeastern New England']                                       = '_SHORTCUT';
    	$regions['Michigan']['Fennville']                                                           = [];
    	$regions['Michigan']['Lake Michigan Shore']                                                 = [];
    	$regions['Michigan']['Leelanau Peninsula']                                                  = [];
    	$regions['Michigan']['Old Mission Peninsula']                                               = [];
    	$regions['Minnesota']['Alexandria Lakes']                                                   = [];
    	$regions['Minnesota']['Upper Mississippi River Valley']                                     = '_SHORTCUT';
    	$regions['Mississippi']['Mississippi Delta']                                                = '_SHORTCUT';
    	$regions['Missouri']['Augusta']                                                             = [];
    	$regions['Missouri']['Hermann']                                                             = [];
    	$regions['Missouri']['Ozark Highlands']                                                     = [];
    	$regions['Missouri']['Ozark Mountain']                                                      = '_SHORTCUT';
    	$regions['Montana']                                                                         = [];
    	$regions['Nebraska']                                                                        = [];
    	$regions['Nevada']                                                                          = [];
    	$regions['New Hampshire']                                                                   = [];
    	$regions['New Jersey']['Central Delaware Valley']                                           = [];
    	$regions['New Jersey']['Outer Coastal Plain']                                               = [];
    	$regions['New Jersey']['Warren Hills']                                                      = [];
    	$regions['New Mexico']['Mesilla Valley']                                                    = [];
    	$regions['New Mexico']['Middle Rio Grande Valley']                                          = [];
    	$regions['New Mexico']['Mimbres Valley']                                                    = [];
    	$regions['New York']['Cayuga Lake']                                                         = [];
    	$regions['New York']['Finger Lakes']                                                        = [];
    	$regions['New York']['Hudson River Region']                                                 = [];
    	$regions['New York']['Lake Erie']                                                           = [];
    	$regions['New York']['Long Island']                                                         = [];
    	$regions['New York']['Niagara Escarpment']                                                  = [];
    	$regions['New York']['North Fork of Long Island']                                           = [];
    	$regions['New York']['Seneca Lake']                                                         = [];
    	$regions['New York']['The Hamptons, Long Island']                                           = [];
    	$regions['North Carolina']['Haw River Valley']                                              = [];
    	$regions['North Carolina']['Swan Creek']                                                    = [];
    	$regions['North Carolina']['Upper Hiwassee Highlands']                                      = '_SHORTCUT';
    	$regions['North Carolina']['Yadkin Valley']                                                 = [];
    	$regions['North Dakota']                                                                    = [];
    	$regions['Ohio']['Grand River Valley']                                                      = [];
    	$regions['Ohio']['Isle St. George']                                                         = [];
    	$regions['Ohio']['Lake Erie']                                                               = '_SHORTCUT';
    	$regions['Ohio']['Loramie Creek']                                                           = [];
    	$regions['Ohio']['Ohio River Valley']                                                       = '_SHORTCUT';
    	$regions['Oklahoma']['Ozark Mountain']                                                      = '_SHORTCUT';
    	$regions['Oregon']['Applegate Valley']                                                      = [];
    	$regions['Oregon']['Chehalem Mountains']                                                    = [];
    	$regions['Oregon']['Columbia Gorge']                                                        = [];
    	$regions['Oregon']['Columbia Valley']                                                       = [];
    	$regions['Oregon']['Dundee Hills']                                                          = [];
    	$regions['Oregon']['Elkton Oregon']                                                         = [];
    	$regions['Oregon']['Eola–Amity Hills']                                                      = [];
    	$regions['Oregon']['McMinnville']                                                           = [];
    	$regions['Oregon']['Red Hill Douglas County, Oregon']                                       = [];
    	$regions['Oregon']['Ribbon Ridge']                                                          = [];
    	$regions['Oregon']['Rogue Valley']                                                          = [];
    	$regions['Oregon']['Snake River Valley']                                                    = '_SHORTCUT';
    	$regions['Oregon']['Southern Oregon']                                                       = [];
    	$regions['Oregon']['The Rocks District of Milton–Freewater']                                = [];
    	$regions['Oregon']['Umpqua Valley']                                                         = [];
    	$regions['Oregon']['Walla Walla Valley']                                                    = [];
    	$regions['Oregon']['Willamette Valley']                                                     = [];
    	$regions['Oregon']['Yamhill–Carlton']                                                       = [];
    	$regions['Pennsylvania']['Central Delaware Valley']                                         = '_SHORTCUT';
    	$regions['Pennsylvania']['Cumberland Valley']                                               = '_SHORTCUT';
    	$regions['Pennsylvania']['Lake Erie']                                                       = '_SHORTCUT';
    	$regions['Pennsylvania']['Lancaster Valley']                                                = [];
    	$regions['Pennsylvania']['Lehigh Valley']                                                   = [];
    	$regions['Rhode Island']['Mississippi Delta']                                               = '_SHORTCUT';
    	$regions['Rhode Island']['Southeastern New England']                                        = '_SHORTCUT';
    	$regions['South Carolina']                                                                  = [];
    	$regions['South Dakota']                                                                    = [];
    	$regions['Tennessee']                                                                       = [];
    	$regions['Texas']['Bell Mountain']                                                          = [];
    	$regions['Texas']['Escondido Valley']                                                       = [];
    	$regions['Texas']['Fredericksburg in the Texas Hill Country']                               = [];
    	$regions['Texas']['Mesilla Valley']                                                         = '_SHORTCUT';
    	$regions['Texas']['Texas Davis Mountains']                                                  = [];
    	$regions['Texas']['Texas High Plains']                                                      = [];
    	$regions['Texas']['Texas Hill Country']                                                     = [];
    	$regions['Texas']['Texoma']                                                                 = [];
    	$regions['Utah']                                                                            = [];
    	$regions['Vermont']                                                                         = [];
    	$regions['Virginia']['Middleburg Virginia']                                                 = [];
    	$regions['Virginia']['Monticello']                                                          = [];
    	$regions['Virginia']['North Fork of Roanoke']                                               = [];
    	$regions['Virginia']['Northern Neck George Washington Birthplace']                          = [];
    	$regions['Virginia']['Rocky Knob']                                                          = [];
    	$regions['Virginia']['Shenandoah Valley']                                                   = [];
    	$regions['Virginia']['Virginia’s Eastern Shore']                                            = [];
    	$regions['Washington']['Ancient Lakes of Columbia Valley']                                  = [];
    	$regions['Washington']['Columbia Gorge']                                                    = '_SHORTCUT';
    	$regions['Washington']['Columbia Valley']                                                   = '_SHORTCUT';
    	$regions['Washington']['Horse Heaven Hills']                                                = [];
    	$regions['Washington']['Lake Chelan']                                                       = [];
    	$regions['Washington']['Naches Heights']                                                    = [];
    	$regions['Washington']['Puget Sound']                                                       = [];
    	$regions['Washington']['Rattlesnake Hills']                                                 = [];
    	$regions['Washington']['Red Mountain']                                                      = [];
    	$regions['Washington']['Snipes Mountain']                                                   = [];
    	$regions['Washington']['Wahluke Slope']                                                     = [];
    	$regions['Washington']['Walla Walla Valley']                                                = '_SHORTCUT';
    	$regions['Washington']['Yakima Valley']                                                     = [];
    	$regions['Washington D.C.']                                                                   = [];
    	$regions['West Virginia']['Kanawha River Valley']                                           = [];
    	$regions['West Virginia']['Ohio River Valley']                                              = '_SHORTCUT';
    	$regions['West Virginia']['Shenandoah Valley']                                              = '_SHORTCUT';
    	$regions['Wisconsin']['Lake Wisconsin']                                                     = [];
    	$regions['Wisconsin']['Upper Mississippi River Valley']                                     = '_SHORTCUT';
    	$regions['Wisconsin']['Wisconsin Ledge']                                                    = [];
    	$regions['Wyoming']                                                                         = [];

    	foreach ($regions as $region => $children) {
    		$this->makeChild($country, $region, $children, $depths, $country->country_id);
    	}

    	Region::whereTranslationIn('name', ['Central Valley', 'Klamath Mountains'], 'en')
			->where('country_id', $country->country_id)
			->update(['is_structural' => true, 'region_type_id' => 7]);

		$names = [
			'Alabama'        => [
				'ru'             => 'Алабама',
				'zh'             => '亚拉巴马',
				'zh-Hant'        => '阿拉巴馬',
			],
			'Alaska'         => [
				'ru'             => 'Аляска',
				'zh'             => '阿拉斯加',
				'zh-Hant'        => '阿拉斯加',
			],
			'Arizona'        => [
				'ru'             => 'Аризона',
				'zh'             => '亚利桑那',
				'zh-Hant'        => '亞利桑那',
			],
			'Arkansas'       => [
				'ru'             => 'Арканзас',
				'zh'             => '阿肯色',
				'zh-Hant'        => '阿肯色',
			],
			'California'     => [
				'fr'             => 'Californie',
				'ru'             => 'Калифорния',
				'zh'             => '加利福尼亚',
				'zh-Hant'        => '加利福尼亞',
			],
			'Colorado'       => [
				'ru'             => 'Колорадо',
				'zh'             => '科罗拉多',
				'zh-Hant'        => '科羅拉多',
			],
			'Connecticut'    => [
				'ru'             => 'Коннектикут',
				'zh'             => '康涅狄格',
				'zh-Hant'        => '康涅狄格',
			],
			'Delaware'       => [
				'ru'             => 'Делавэр',
				'zh'             => '特拉华',
				'zh-Hant'        => '特拉華',
			],
			'Florida'        => [
				'fr'             => 'Floride',
				'ru'             => 'Флорида',
				'zh'             => '佛罗里达',
				'zh-Hant'        => '佛羅里達',
			],
			'Georgia'        => [
				'fr'             => 'Géorgie',
				'ru'             => 'Джорджия',
				'zh'             => '佐治亚',
				'zh-Hant'        => '佐治亞',
			],
			'Hawaii'         => [
				'es'             => 'Hawái',
				'fr'             => 'Hawaï',
				'ru'             => 'Гавайи',
				'zh'             => '夏威夷',
				'zh-Hant'        => '夏威夷',
			],
			'Idaho'          => [
				'ru'             => 'Айдахо',
				'zh'             => '爱达荷',
				'zh-Hant'        => '愛達荷',
			],
			'Illinois'       => [
				'ru'             => 'Иллинойс',
				'zh'             => '伊利诺伊',
				'zh-Hant'        => '伊利諾伊',
			],
			'Indiana'        => [
				'ru'             => 'Индиана',
				'zh'             => '印第安纳',
				'zh-Hant'        => '印第安納',
			],
			'Iowa'           => [
				'ru'             => 'Айова',
				'zh'             => '艾奥瓦',
				'zh-Hant'        => '艾奧瓦',
			],
			'Kansas'         => [
				'ru'             => 'Канзас',
				'zh'             => '堪萨斯',
				'zh-Hant'        => '堪薩斯',
			],
			'Kentucky'       => [
				'ru'             => 'Кентукки',
				'zh'             => '肯塔基',
				'zh-Hant'        => '肯塔基',
			],
			'Louisiana'      => [
				'es'             => 'Luisiana',
				'fr'             => 'Louisiane',
				'ru'             => 'Луизиана',
				'zh'             => '路易斯安那',
				'zh-Hant'        => '路易斯安那',
			],
			'Maine'          => [
				'ru'             => 'Мэн',
				'zh'             => '缅因',
				'zh-Hant'        => '緬因',
			],
			'Maryland'       => [
				'ru'             => 'Мэриленд',
				'zh'             => '马里兰',
				'zh-Hant'        => '馬里蘭',
			],
			'Massachusetts'  => [
				'ru'             => 'Массачусетс',
				'zh'             => '马萨诸塞',
				'zh-Hant'        => '馬薩諸塞',
			],
			'Michigan'       => [
				'es'             => 'Míchigan',
				'ru'             => 'Мичиган',
				'zh'             => '密西根',
				'zh-Hant'        => '密西根',
			],
			'Minnesota'      => [
				'ru'             => 'Миннесота',
				'zh'             => '明尼苏达',
				'zh-Hant'        => '明尼蘇達',
			],
			'Mississippi'    => [
				'es'             => 'Misisipi',
				'ru'             => 'Миссисипи',
				'zh'             => '密西西比',
				'zh-Hant'        => '密西西比',
			],
			'Missouri'       => [
				'es'             => 'Misuri',
				'ru'             => 'Миссури',
				'zh'             => '密苏里',
				'zh-Hant'        => '密蘇里',
			],
			'Montana'        => [
				'ru'             => 'Монтана',
				'zh'             => '蒙大拿',
				'zh-Hant'        => '蒙大拿',
			],
			'Nebraska'       => [
				'ru'             => 'Небраска',
				'zh'             => '内布拉斯加',
				'zh-Hant'        => '內布拉斯加',
			],
			'Nevada'         => [
				'ru'             => 'Невада',
				'zh'             => '内华达',
				'zh-Hant'        => '內華達',
			],
			'New Hampshire'  => [
				'es'             => 'Nuevo Hampshire',
				'ru'             => 'Нью-Гэмпшир',
				'zh'             => '新罕布什尔',
				'zh-Hant'        => '新罕布什爾',
			],
			'New Jersey'     => [
				'es'             => 'Nueva Jersey',
				'ru'             => 'Нью-Джерси',
				'zh'             => '新泽西',
				'zh-Hant'        => '新澤西',
			],
			'New Mexico'     => [
				'es'             => 'Nuevo México',
				'fr'             => 'Nouveau-Mexique',
				'ru'             => 'Нью-Мексико',
				'zh'             => '新墨西哥',
				'zh-Hant'        => '新墨西哥',
			],
			'New York'       => [
				'es'             => 'Nueva York',
				'ru'             => 'Нью-Йорк',
				'zh'             => '纽约',
				'zh-Hant'        => '紐約',
			],
			'North Carolina' => [
				'es'             => 'Carolina del Norte',
				'fr'             => 'Caroline du Nord',
				'ru'             => 'Северная Каролина',
				'zh'             => '北卡罗来纳',
				'zh-Hant'        => '北卡羅來納',
			],
			'North Dakota'   => [
				'es'             => 'Dakota del Norte',
				'fr'             => 'Dakota du Nord',
				'ru'             => 'Северная Дакота',
				'zh'             => '北达科他',
				'zh-Hant'        => '北達科他',
			],
			'Ohio'           => [
				'ru'             => 'Огайо',
				'zh'             => '俄亥俄',
				'zh-Hant'        => '俄亥俄',
			],
			'Oklahoma'       => [
				'ru'             => 'Оклахома',
				'zh'             => '奧克拉荷馬',
				'zh-Hant'        => '奧克拉荷馬',
			],
			'Oregon'         => [
				'es'             => 'Oregón',
				'ru'             => 'Орегон',
				'zh'             => '俄勒冈',
				'zh-Hant'        => '俄勒岡',
			],
			'Pennsylvania'   => [
				'es'             => 'Pensilvania',
				'fr'             => 'Pennsylvanie',
				'ru'             => 'Пенсильвания',
				'zh'             => '宾夕法尼亚',
				'zh-Hant'        => '賓夕法尼亞',
			],
			'Rhode Island'   => [
				'ru'             => 'Род-Айленд',
				'zh'             => '罗得岛',
				'zh-Hant'        => '羅得島',
			],
			'South Carolina' => [
				'es'             => 'Carolina del Sur',
				'fr'             => 'Caroline du Sud',
				'ru'             => 'Южная Каролина',
				'zh'             => '南卡罗来纳',
				'zh-Hant'        => '南卡羅來納',
			],
			'South Dakota'   => [
				'es'             => 'Dakota del Sur',
				'fr'             => 'Dakota du Sud',
				'ru'             => 'Южная Дакота',
				'zh'             => '南达科他',
				'zh-Hant'        => '南達科他',
			],
			'Tennessee'      => [
				'ru'             => 'Теннесси',
				'zh'             => '田纳西',
				'zh-Hant'        => '田納西',
			],
			'Texas'          => [
				'ru'             => 'Техас',
				'zh'             => '得克萨斯',
				'zh-Hant'        => '得克薩斯',
			],
			'Utah'           => [
				'ru'             => 'Юта',
				'zh'             => '犹他',
				'zh-Hant'        => '猶他',
			],
			'Vermont'        => [
				'ru'             => 'Вермонт',
				'zh'             => '佛蒙特',
				'zh-Hant'        => '佛蒙特',
			],
			'Virginia'       => [
				'fr'             => 'Virginie',
				'ru'             => 'Виргиния',
				'zh'             => '弗吉尼亚',
				'zh-Hant'        => '弗吉尼亞',
			],
			'Washington'     => [
				'ru'             => 'Вашингтон',
				'zh'             => '华盛顿',
				'zh-Hant'        => '華盛頓',
			],
			'West Virginia'  => [
				'es'             => 'Virginia Occidental',
				'fr'             => 'Virginie-Occidentale',
				'ru'             => 'Западная Виргиния',
				'zh'             => '西弗吉尼亚',
				'zh-Hant'        => '西弗吉尼亞',
			],
			'Wisconsin'      => [
				'ru'             => 'Висконсин',
				'zh'             => '威斯康星',
				'zh-Hant'        => '威斯康星',
			],
			'Wyoming'        => [
				'ru'             => 'Вайоминг',
				'zh'             => '怀俄明',
				'zh-Hant'        => '懷俄明',
			],
		];

		foreach ($names as $en => $locales) {
			$region = Region::whereTranslation('name', $en, 'en')->where('country_id', $country->country_id)->first();
			
			if ($region) {
			
			$attr = [];

			foreach ($locales as $locale => $name) {
				$attr[$locale] = ['name' => $name];
			}
			
			if (@$attr['zh-Hant'] == @$attr['zh']) {
				unset($attr['zh-Hant']);
			}

			$region->fill($attr)->save();
			}
			else {
				dd($en);
			}
		}
		
    }

}
