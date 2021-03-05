<?php
// created: 2021-03-05 17:17:09
$viewdefs = array (
  'Contacts' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
            4 => 
            array (
              'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
              'sugar_html' => 
              array (
                'type' => 'submit',
                'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'htmlOptions' => 
                array (
                  'class' => 'button',
                  'id' => 'manage_subscriptions_button',
                  'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                  'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                  'name' => 'Manage Subscriptions',
                ),
              ),
            ),
          ),
        ),
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
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Leads/Lead.js',
          ),
        ),
        'useTabs' => false,
        'tabDefs' => 
        array (
          'LBL_CONTACT_INFORMATION' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
        'syncDetailEditViews' => true,
      ),
      'panels' => 
      array (
        'lbl_contact_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'comment' => 'First name of the contact',
              'label' => 'LBL_FIRST_NAME',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'last_name',
              'comment' => 'Last name of the contact',
              'label' => 'LBL_LAST_NAME',
            ),
            1 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_OFFICE_PHONE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL_ADDRESS',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'title',
              'comment' => 'The title of the contact',
              'label' => 'LBL_TITLE',
            ),
            1 => 
            array (
              'name' => 'phone_mobile',
              'label' => 'LBL_MOBILE_PHONE',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'department',
              'label' => 'LBL_DEPARTMENT',
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'label' => 'LBL_FAX_PHONE',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_ACCOUNT_NAME',
              'displayParams' => 
              array (
              ),
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
              ),
            ),
            1 => 
            array (
              'name' => 'primary_address_city',
              'comment' => 'City for primary address',
              'label' => 'LBL_PRIMARY_ADDRESS_CITY',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
        ),
      ),
    ),
  ),
);