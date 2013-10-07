<?php

/**
 * Drush initialization script.
 *
 * The drush initialization file which defines the command line values for using the site-install command.
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

$command_specific['site-install'] = array(
	'db-url' => 'mysql://username:password@hostname:3306/database',
	'db-prefix' => 'myra',
	'account-mail' => 'myra-software-dev@lists.utah.edu',
	'site-name' => 'My Research Assistant',
	'site-mail' => 'myra-software-dev@lists.utah.edu',
);