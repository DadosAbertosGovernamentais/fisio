<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_opportunities_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
          ),
          1 => 'opportunity_type',
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
      ),
    ),
  ),
);
?>
