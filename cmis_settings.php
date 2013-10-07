#!/usr/bin/env drush
<?php

/**
 * CMIS Settings Script
 *
 * This is a Drush PHP script that sets the CMIS settings in the global configuration of
 * Drupal. Execute it with 'drush php-script cmis_settings'
 *
 * PHP version 5
 *
 * (c) 2008-2010 MyRA Project, Health Sciences IT, University of Utah
 * Contact: Dr. Scott Narus <scott.narus@hsc.utah.edu>
 * Biomedical Informatics, 26 South 2000 East
 * Room 5775 HSEB, Salt Lake City, UT 84112
 * Day Phone: 1-801-213-3288
 *
 * @author     N. Dustin Schultz <dustin.schultz@utah.edu>
 * @version    Apr 5, 2010
 */

# Replace with your local Alfresco username:password
$cmis_repositories_data = array(
  'default' => array(
    'user' => 'alf_username',
    'password' => 'alf_password',
    'url' => 'alf_URL'
  )
);

// An array to tell CMIS which node types to sync back to the repository
$cmis_sync_map_data = array(
  'page' => array(
    'enabled' => TRUE,
    'cmis_folderPath' => 'alf_cmis_path'
  ),
  'article' => array(
    'enabled' => TRUE,
    'cmis_folderPath' => 'alf_cmis_path'
  )
);

# Set these variables within drupal
variable_set('cmis_repositories', $cmis_repositories_data);
variable_set('cmis_sync_map', $cmis_sync_map_data);