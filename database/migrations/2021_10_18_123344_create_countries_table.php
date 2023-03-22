<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 75)->unique();
            $table->char('iso2', 2)->unique();
            $table->char('iso3', 3)->unique();
            $table->boolean('is_eu')->default(0)->index();
        });

        // data
        DB::Statement("
            INSERT INTO `countries` (`iso2`, `iso3`, `name`, `is_eu`) VALUES
            ('AD', 'AND', 'Andorra', 0),
            ('AE', 'ARE', 'Verenigde Arabische Emiraten', 0),
            ('AF', 'AFG', 'Afghanistan', 0),
            ('AG', 'ATG', 'Antigua en Barbuda', 0),
            ('AI', 'AIA', 'Anguilla', 0),
            ('AL', 'ALB', 'Albanië', 0),
            ('AM', 'ARM', 'Armenië', 0),
            ('AO', 'AGO', 'Angola', 0),
            ('AQ', 'ATA', 'Antarctica', 0),
            ('AR', 'ARG', 'Argentinië', 0),
            ('AS', 'ASM', 'Amerikaans-Samoa', 0),
            ('AT', 'AUT', 'Oostenrijk', 1),
            ('AU', 'AUS', 'Australië', 0),
            ('AW', 'ABW', 'Aruba', 0),
            ('AX', 'ALA', 'Åland', 0),
            ('AZ', 'AZE', 'Azerbeidzjan', 0),
            ('BA', 'BIH', 'Bosnië en Herzegovina', 0),
            ('BB', 'BRB', 'Barbados', 0),
            ('BD', 'BGD', 'Bangladesh', 0),
            ('BE', 'BEL', 'België', 1),
            ('BF', 'BFA', 'Burkina Faso', 0),
            ('BG', 'BGR', 'Bulgarije', 1),
            ('BH', 'BHR', 'Bahrein', 0),
            ('BI', 'BDI', 'Burundi', 0),
            ('BJ', 'BEN', 'Benin', 0),
            ('BL', 'BLM', 'Saint-Barthélemy', 0),
            ('BM', 'BMU', 'Bermuda', 0),
            ('BN', 'BRN', 'Brunei', 0),
            ('BO', 'BOL', 'Bolivia', 0),
            ('BQ', 'BES', 'Caribisch Nederland', 0),
            ('BR', 'BRA', 'Brazilië', 0),
            ('BS', 'BHS', 'Bahama\'s', 0),
            ('BT', 'BTN', 'Bhutan', 0),
            ('BV', 'BVT', 'Bouveteiland', 0),
            ('BW', 'BWA', 'Botswana', 0),
            ('BY', 'BLR', 'Wit-Rusland', 0),
            ('BZ', 'BLZ', 'Belize', 0),
            ('CA', 'CAN', 'Canada', 0),
            ('CC', 'CCK', 'Cocoseilanden', 0),
            ('CD', 'COD', 'Congo-Kinshasa', 0),
            ('CF', 'CAF', 'Centraal-Afrikaanse Republiek', 0),
            ('CG', 'COG', 'Congo-Brazzaville', 0),
            ('CH', 'CHE', 'Zwitserland', 0),
            ('CI', 'CIV', 'Ivoorkust', 0),
            ('CK', 'COK', 'Cookeilanden', 0),
            ('CL', 'CHL', 'Chili', 0),
            ('CM', 'CMR', 'Kameroen', 0),
            ('CN', 'CHN', 'China', 0),
            ('CO', 'COL', 'Colombia', 0),
            ('CR', 'CRI', 'Costa Rica', 0),
            ('CU', 'CUB', 'Cuba', 0),
            ('CV', 'CPV', 'Kaapverdië', 0),
            ('CW', 'CUW', 'Curaçao', 0),
            ('CX', 'CXR', 'Christmaseiland', 0),
            ('CY', 'CYP', 'Cyprus', 1),
            ('CZ', 'CZE', 'Tsjechië', 1),
            ('DE', 'DEU', 'Duitsland', 1),
            ('DJ', 'DJI', 'Djibouti', 0),
            ('DK', 'DNK', 'Denemarken', 1),
            ('DM', 'DMA', 'Dominica', 0),
            ('DO', 'DOM', 'Dominicaanse Republiek', 0),
            ('DZ', 'DZA', 'Algerije', 0),
            ('EC', 'ECU', 'Ecuador', 0),
            ('EE', 'EST', 'Estland', 1),
            ('EG', 'EGY', 'Egypte', 0),
            ('EH', 'ESH', 'Westelijke Sahara', 0),
            ('ER', 'ERI', 'Eritrea', 0),
            ('ES', 'ESP', 'Spanje', 1),
            ('ET', 'ETH', 'Ethiopië', 0),
            ('FI', 'FIN', 'Finland', 1),
            ('FJ', 'FJI', 'Fiji', 0),
            ('FK', 'FLK', 'Falklandeilanden', 0),
            ('FM', 'FSM', 'Micronesia', 0),
            ('FO', 'FRO', 'Faeröer', 0),
            ('FR', 'FRA', 'Frankrijk', 1),
            ('GA', 'GAB', 'Gabon', 0),
            ('GB', 'GBR', 'Verenigd Koninkrijk', 1),
            ('GD', 'GRD', 'Grenada', 0),
            ('GE', 'GEO', 'Georgië', 0),
            ('GF', 'GUF', 'Frans-Guyana', 0),
            ('GG', 'GGY', 'Guernsey', 0),
            ('GH', 'GHA', 'Ghana', 0),
            ('GI', 'GIB', 'Gibraltar', 0),
            ('GL', 'GRL', 'Groenland', 0),
            ('GM', 'GMB', 'Gambia', 0),
            ('GN', 'GIN', 'Guinee', 0),
            ('GP', 'GLP', 'Guadeloupe', 0),
            ('GQ', 'GNQ', 'Equatoriaal-Guinea', 0),
            ('GR', 'GRC', 'Griekenland', 1),
            ('GS', 'SGS', 'Zuid-Georgia en de Zuidelijke Sandwicheilanden', 0),
            ('GT', 'GTM', 'Guatemala', 0),
            ('GU', 'GUM', 'Guam', 0),
            ('GW', 'GNB', 'Guinee-Bissau', 0),
            ('GY', 'GUY', 'Guyana', 0),
            ('HK', 'HKG', 'Hongkong', 0),
            ('HM', 'HMD', 'Heard en McDonaldeilanden', 0),
            ('HN', 'HND', 'Honduras', 0),
            ('HR', 'HRV', 'Kroatië', 1),
            ('HT', 'HTI', 'Haïti', 0),
            ('HU', 'HUN', 'Hongarije', 1),
            ('ID', 'IDN', 'Indonesië', 0),
            ('IE', 'IRL', 'Ierland', 1),
            ('IL', 'ISR', 'Israël', 0),
            ('IM', 'IMN', 'Man', 0),
            ('IN', 'IND', 'India', 0),
            ('IO', 'IOT', 'Brits Indische Oceaanterritorium', 0),
            ('IQ', 'IRQ', 'Irak', 0),
            ('IR', 'IRN', 'Iran', 0),
            ('IS', 'ISL', 'IJsland', 0),
            ('IT', 'ITA', 'Italië', 1),
            ('JE', 'JEY', 'Jersey', 1),
            ('JM', 'JAM', 'Jamaica', 0),
            ('JO', 'JOR', 'Jordanië', 0),
            ('JP', 'JPN', 'Japan', 0),
            ('KE', 'KEN', 'Kenia', 0),
            ('KG', 'KGZ', 'Kirgizië', 0),
            ('KH', 'KHM', 'Cambodja', 0),
            ('KI', 'KIR', 'Kiribati', 0),
            ('KM', 'COM', 'Comoren', 0),
            ('KN', 'KNA', 'Saint Kitts en Nevis', 0),
            ('KP', 'PRK', 'Noord-Korea', 0),
            ('KR', 'KOR', 'Zuid-Korea', 0),
            ('KW', 'KWT', 'Koeweit', 0),
            ('KY', 'CYM', 'Kaaimaneilanden', 0),
            ('KZ', 'KAZ', 'Kazachstan', 0),
            ('LA', 'LAO', 'Laos', 0),
            ('LB', 'LBN', 'Libanon', 0),
            ('LC', 'LCA', 'Saint Lucia', 0),
            ('LI', 'LIE', 'Liechtenstein', 0),
            ('LK', 'LKA', 'Sri Lanka', 0),
            ('LR', 'LBR', 'Liberia', 0),
            ('LS', 'LSO', 'Lesotho', 0),
            ('LT', 'LTU', 'Litouwen', 1),
            ('LU', 'LUX', 'Luxemburg', 1),
            ('LV', 'LVA', 'Letland', 1),
            ('LY', 'LBY', 'Libië', 0),
            ('MA', 'MAR', 'Marokko', 0),
            ('MC', 'MCO', 'Monaco', 0),
            ('MD', 'MDA', 'Moldavië', 0),
            ('ME', 'MNE', 'Montenegro', 0),
            ('MF', 'MAF', 'Sint-Maarten', 0),
            ('MG', 'MDG', 'Madagaskar', 0),
            ('MH', 'MHL', 'Marshalleilanden', 0),
            ('MK', 'MKD', 'Noord-Macedonië', 0),
            ('ML', 'MLI', 'Mali', 0),
            ('MM', 'MMR', 'Myanmar', 0),
            ('MN', 'MNG', 'Mongolië', 0),
            ('MO', 'MAC', 'Macau', 0),
            ('MP', 'MNP', 'Noordelijke Marianen', 0),
            ('MQ', 'MTQ', 'Martinique', 0),
            ('MR', 'MRT', 'Mauritanië', 0),
            ('MS', 'MSR', 'Montserrat', 0),
            ('MT', 'MLT', 'Malta', 1),
            ('MU', 'MUS', 'Mauritius', 0),
            ('MV', 'MDV', 'Maldiven', 0),
            ('MW', 'MWI', 'Malawi', 0),
            ('MX', 'MEX', 'Mexico', 0),
            ('MY', 'MYS', 'Maleisië', 0),
            ('MZ', 'MOZ', 'Mozambique', 0),
            ('NA', 'NAM', 'Namibië', 0),
            ('NC', 'NCL', 'Nieuw-Caledonië', 0),
            ('NE', 'NER', 'Niger', 0),
            ('NF', 'NFK', 'Norfolk', 0),
            ('NG', 'NGA', 'Nigeria', 0),
            ('NI', 'NIC', 'Nicaragua', 0),
            ('NL', 'NLD', 'Nederland', 1),
            ('NO', 'NOR', 'Noorwegen', 0),
            ('NP', 'NPL', 'Nepal', 0),
            ('NR', 'NRU', 'Nauru', 0),
            ('NU', 'NIU', 'Niue', 0),
            ('NZ', 'NZL', 'Nieuw-Zeeland', 0),
            ('OM', 'OMN', 'Oman', 0),
            ('PA', 'PAN', 'Panama', 0),
            ('PE', 'PER', 'Peru', 0),
            ('PF', 'PYF', 'Frans-Polynesië', 0),
            ('PG', 'PNG', 'Papoea-Nieuw-Guinea', 0),
            ('PH', 'PHL', 'Filipijnen', 0),
            ('PK', 'PAK', 'Pakistan', 0),
            ('PL', 'POL', 'Polen', 1),
            ('PM', 'SPM', 'Saint-Pierre en Miquelon', 0),
            ('PN', 'PCN', 'Pitcairneilanden', 0),
            ('PR', 'PRI', 'Puerto Rico', 0),
            ('PS', 'PSE', 'Palestina', 0),
            ('PT', 'PRT', 'Portugal', 1),
            ('PW', 'PLW', 'Palau', 0),
            ('PY', 'PRY', 'Paraguay', 0),
            ('QA', 'QAT', 'Qatar', 0),
            ('RE', 'REU', 'Réunion', 0),
            ('RO', 'ROU', 'Roemenië', 1),
            ('RS', 'SRB', 'Servië', 0),
            ('RU', 'RUS', 'Rusland', 0),
            ('RW', 'RWA', 'Rwanda', 0),
            ('SA', 'SAU', 'Saoedi-Arabië', 0),
            ('SB', 'SLB', 'Salomonseilanden', 0),
            ('SC', 'SYC', 'Seychellen', 0),
            ('SD', 'SDN', 'Soedan', 0),
            ('SE', 'SWE', 'Zweden', 1),
            ('SG', 'SGP', 'Singapore', 0),
            ('SH', 'SHN', 'Sint-Helena, Ascension en Tristan da Cunha', 0),
            ('SI', 'SVN', 'Slovenië', 1),
            ('SJ', 'SJM', 'Spitsbergen en Jan Mayen', 0),
            ('SK', 'SVK', 'Slowakije', 1),
            ('SL', 'SLE', 'Sierra Leone', 0),
            ('SM', 'SMR', 'San Marino', 0),
            ('SN', 'SEN', 'Senegal', 0),
            ('SO', 'SOM', 'Somalië', 0),
            ('SR', 'SUR', 'Suriname', 0),
            ('SS', 'SSD', 'Zuid-Soedan', 0),
            ('ST', 'STP', 'Sao Tomé en Principe', 0),
            ('SV', 'SLV', 'El Salvador', 0),
            ('SX', 'SXM', 'Sint Maarten', 0),
            ('SY', 'SYR', 'Syrië', 0),
            ('SZ', 'SWZ', 'Swaziland', 0),
            ('TC', 'TCA', 'Turks- en Caicoseilanden', 0),
            ('TD', 'TCD', 'Tsjaad', 0),
            ('TF', 'ATF', 'Franse Zuidelijke en Antarctische Gebieden', 0),
            ('TG', 'TGO', 'Togo', 0),
            ('TH', 'THA', 'Thailand', 0),
            ('TJ', 'TJK', 'Tadzjikistan', 0),
            ('TK', 'TKL', 'Tokelau', 0),
            ('TL', 'TLS', 'Oost-Timor', 0),
            ('TM', 'TKM', 'Turkmenistan', 0),
            ('TN', 'TUN', 'Tunesië', 0),
            ('TO', 'TON', 'Tonga', 0),
            ('TR', 'TUR', 'Turkije', 0),
            ('TT', 'TTO', 'Trinidad en Tobago', 0),
            ('TV', 'TUV', 'Tuvalu', 0),
            ('TW', 'TWN', 'Taiwan', 0),
            ('TZ', 'TZA', 'Tanzania', 0),
            ('UA', 'UKR', 'Oekraïne', 0),
            ('UG', 'UGA', 'Oeganda', 0),
            ('UM', 'UMI', 'Kleine afgelegen eilanden van de Verenigde Staten', 0),
            ('US', 'USA', 'Verenigde Staten', 0),
            ('UY', 'URY', 'Uruguay', 0),
            ('UZ', 'UZB', 'Oezbekistan', 0),
            ('VA', 'VAT', 'Vaticaanstad', 0),
            ('VC', 'VCT', 'Saint Vincent en de Grenadines', 0),
            ('VE', 'VEN', 'Venezuela', 0),
            ('VG', 'VGB', 'Britse Maagdeneilanden', 0),
            ('VI', 'VIR', 'Amerikaanse Maagdeneilanden', 0),
            ('VN', 'VNM', 'Vietnam', 0),
            ('VU', 'VUT', 'Vanuatu', 0),
            ('WF', 'WLF', 'Wallis en Futuna', 0),
            ('WS', 'WSM', 'Samoa', 0),
            ('YE', 'YEM', 'Jemen', 0),
            ('YT', 'MYT', 'Mayotte', 0),
            ('ZA', 'ZAF', 'Zuid-Afrika', 0),
            ('ZM', 'ZMB', 'Zambia', 0),
            ('ZW', 'ZWE', 'Zimbabwe', 0);
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
