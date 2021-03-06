<?php
return [
    'settings' => 'Settings',
    'user_settings' => 'User Settings',
    'account_settings' => 'Account Settings',
    'app_settings' => 'Application Settings',
    'system_settings' => 'System Settings',

    'timezone' => 'Timezone',
    'date_format' => 'Date Format',
    'time_format' => 'Time Format',
    'listitem_count' => 'Number of Items in Lists',

    'private_default' => 'Private Links by default',
    'private_default_help' => 'Enabling this will make all new links private by default',

    'notes_private_default' => 'Private Notes by default',
    'notes_private_default_help' => 'Enabling this will make all new notes private by default',

    'display_mode' => 'Display links as',
    'display_mode_standard' => 'rows with much details',
    'display_mode_cards' => 'cards with less details',

    'sharing' => 'Link Sharing',
    'sharing_help' => 'Enable all services you want to display for links, to be able to share them easily with one click.',
    'sharing_toggle' => 'Toggle all on/off',

    'darkmode' => 'Darkmode',
    'darkmode_help' => 'You can either choose to turn on permanently or automatically based on your device settings. (<small>Check <a href="https://caniuse.com/#search=prefers-color-scheme">here</a> if your browser supports automatic detection</small>)',
    'darkmode_disabled' => 'Disabled',
    'darkmode_auto' => 'Automatically',
    'darkmode_permanent' => 'Permanent',

    'save_settings' => 'Save Settings',
    'settings_saved' => 'Settings successfully updated!',

    'bookmarklet' => 'Bookmarklet',
    'bookmarklet_button' => 'Drag this to your Bookmarks or right-click and save it as a bookmark',
    'bookmarklet_help' => 'Add this Bookmarklet to your browser to quickly add links from the sites you visit without having to open LinkAce manually.',

    'change_password' => 'Change Password',
    'old_password' => 'Old Password',
    'new_password' => 'New Password',
    'new_password2' => 'Repeat new Password',
    'password_updated' => 'Password changed successfully!',
    'old_password_invalid' => 'The old password is not valid!',

    'api_token' => 'API Token',
    'api_token_generate' => 'Generate Token',
    'api_token_generate_confirm' => 'Do you really want to generate a new token?',
    'api_token_help' => 'The API token can be used to access LinkAce from other application or scripts.',
    'api_token_generate_info' => 'Caution: If you already have an API token, generating a new one will break all existing integrations!',
    'api_token_generate_failure' => 'A new API token could not be generated. Please check your browser console and application logs for more information.',

    'sys_page_title' => 'Page Title',
    'sys_guest_access' => 'Enable Guest Access',
    'sys_guest_access_help' => 'If enabled, guest will be able to see all links that are not private.',

    'cron_token' => 'Cron Token',
    'cron_token_generate' => 'Generate Token',
    'cron_token_generate_confirm' => 'Do you really want to generate a new token?',
    'cron_token_help' => 'The cron token is needed to run the cron service which checks for dead links or running backups.',
    'cron_token_url' => 'Point your cron to the following URL: <span class="cron-token-url">:route</span>',
    'cron_token_generate_info' => 'Caution: If you already have an cron token, generating a new one will break the existing cron job!',
    'cron_token_generate_failure' => 'A new cron token could not be generated. Please check your browser console and application logs for more information.',
];
