<?php

/**
 * All category types
 *
 * @since    2.0.0
 */
$categories = [
      'miscellaneous' => __('Miscellaneous', 'Open RDW kenteken voertuiginformatie'),
      'history' => __('History', 'Open RDW kenteken voertuiginformatie'),
      'vehicle' => __('Vehicle', 'Open RDW kenteken voertuiginformatie'),
      'capacity' => __('Wheight and capacity', 'Open RDW kenteken voertuiginformatie'),
      'maxtow' => __('Maximum towable mass', 'Open RDW kenteken voertuiginformatie'),
      'engine' => __('Engine', 'Open RDW kenteken voertuiginformatie'),
      'design' => __('Design', 'Open RDW kenteken voertuiginformatie'),
      'moped' => __('Moped', 'Open RDW kenteken voertuiginformatie'),
      'axels' => __('Axels', 'Open RDW kenteken voertuiginformatie'),
      'fuel' => __('Fuel information', 'Open RDW kenteken voertuiginformatie'),
      'fuel' => __('Fuel information', 'Open RDW kenteken voertuiginformatie'),
      'body' => __('Body work', 'Open RDW kenteken voertuiginformatie')
];

/**
 * All response ID's and labels
 *
 * @since    2.0.0
 */
return [
    'merk' => [
        'category' => $categories['vehicle'],
        'label' => __('Brand', 'Open RDW kenteken voertuiginformatie')
    ],
    'handelsbenaming' => [
        'category' => $categories['vehicle'],
        'label' => __('Commercial name', 'Open RDW kenteken voertuiginformatie')
    ],
    'voertuigsoort' => [
        'category' => $categories['vehicle'],
        'label' => __('Vehicle type', 'Open RDW kenteken voertuiginformatie')
    ],
    'eerste_kleur' => [
        'category' => $categories['design'],
        'label' => __('First colour', 'Open RDW kenteken voertuiginformatie')
    ],
    'tweede_kleur' => [
        'category' => $categories['design'],
        'label' => __('Secondary colour', 'Open RDW kenteken voertuiginformatie')
    ],
    'aantal_zitplaatsen' => [
        'category' => $categories['design'],
        'label' => __('Number of seats', 'Open RDW kenteken voertuiginformatie')
    ],
    'aantal_staanplaatsen' => [
        'category' => $categories['design'],
        'label' => __('Number of standing places', 'Open RDW kenteken voertuiginformatie')
    ],
    'brandstof_omschrijving' => [
        'category' => $categories['engine'],
        'label' => __('Fuel description', 'Open RDW kenteken voertuiginformatie')
    ],
    'aantal_cilinders' => [
        'category' => $categories['engine'],
        'label' => __('Number of cilinders', 'Open RDW kenteken voertuiginformatie')
    ],
    'cilinderinhoud' => [
        'category' => $categories['engine'],
        'label' => __('Engine capacity', 'Open RDW kenteken voertuiginformatie')
    ],
    'massa_ledig_voertuig' => [
        'category' => $categories['capacity'],
        'label' => __('Empty vehicle mass', 'Open RDW kenteken voertuiginformatie')
    ],
    'laadvermogen' => [
        'category' => $categories['capacity'],
        'label' => __('Capacity', 'Open RDW kenteken voertuiginformatie')
    ],
    'toegestane_maximum_massa_voertuig' => [
        'category' => $categories['capacity'],
        'label' => __('Maximum permissible mass of vehicle', 'Open RDW kenteken voertuiginformatie')
    ],
    'massa_rijklaar' => [
        'category' => $categories['capacity'],
        'label' => __('Mass roadworthy', 'Open RDW kenteken voertuiginformatie')
    ],
    'maximum_massa_trekken_ongeremd' => [
        'category' => $categories['maxtow'],
        'label' => __('Maximum towable mass non-braked', 'Open RDW kenteken voertuiginformatie')
    ],
    'maximum_trekken_massa_geremd' => [
        'category' => $categories['maxtow'],
        'label' => __('Maximum towable mass braked', 'Open RDW kenteken voertuiginformatie')
    ],
    'oplegger_geremd' => [
        'category' => $categories['maxtow'],
        'label' => __('Trailer braked', 'Open RDW kenteken voertuiginformatie')
    ],
    'aanhangwagen_autonoom_geremd' => [
        'category' => $categories['maxtow'],
        'label' => __('Trailer autonomous braked', 'Open RDW kenteken voertuiginformatie')
    ],
    'aanhangwagen_middenas_geremd' => [
        'category' => $categories['maxtow'],
        'label' => __('Trailer center axis braked', 'Open RDW kenteken voertuiginformatie')
    ],
    'datum_eerste_toelating' => [
        'category' => $categories['history'],
        'label' => __('Date of first registration', 'Open RDW kenteken voertuiginformatie')
    ],
    'datum_eerste_afgifte_nederland' => [
        'category' => $categories['history'],
        'label' => __('Date of first release Netherlands', 'Open RDW kenteken voertuiginformatie')
    ],
    'datum_tenaamstelling' => [
        'category' => $categories['history'],
        'label' => __('Date ascription', 'Open RDW kenteken voertuiginformatie')
    ],
    'vervaldatum_apk' => [
        'category' => $categories['history'],
        'label' => __('MOT expiry', 'Open RDW kenteken voertuiginformatie')
    ],
];
