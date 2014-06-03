<?php

return array(
	/**
	 * Mod Respository Location
	 * 
	 * This is the location of your mod reposistory. INCLUDE a trailing slash!
	 * This can be a URL or an absolute file location.
	 * 
	 **/
	'repo_location' => 'https://s3-us-west-1.amazonaws.com/ecmodpacks/Mods/',

	/**
	 * Mirror Location
	 * 
	 * This is where the launcher will be told to search for your files. If your
	 * repo location is already a URL you can use the same location here.
	 * 
	 **/
	'mirror_url' => 'https://s3-us-west-1.amazonaws.com/ecmodpacks/Mods/',
	
	/**
	 * Platform API Key
	 * 
	 * Enter your platform API key if you would like to link Solder to your
	 * Platform account.
	 *
	 * @deprecated This config option is no longer required in Solder 0.6
	 * 
	 **/
	'platform_key' => '523bb3afd25e68a0348661d90fb62b36628f68e1320f2e311bf591c14e59420b',

	/**
	 * Minecraft Version API
	 * 
	 * Do not touch this field unless you have an API that returns exactly the same
	 * response as the default Technic one. This URL is used to checked what Minecraft
	 * versions are currently compatible with the launcher.
	 */
	'minecraft_api' => 'http://www.technicpack.net/api/minecraft',

	/**
	 * Amazon S3 Integration
	 *
	 * If you would like to use Amazon S3 for serving your pack resources set this to
	 * true and fill in your AWS information below.
	 */
	'use_s3' => true,

	/**
	 * Amazon AWS Access Key
	 */
	'access_key' => getenv('AWS_ACCESS_KEY'),

	/**
	 * Amazon AWS Secret Key
	 */
	'secret_key' => getenv('AWS_SECRET_KEY'),

	/**
	 * Amazon S3 Bucket
	 *
	 * This is the bucket that will be used to store your pack resources
	 */
	'bucket' => 'ecmodpacks',

	/**
	 * Amazon S3 Bucket URL
	 *
	 * Publically accessible URL to your bucket. Including trailing slash!
	 */
	's3_url' => 'https://s3-us-west-1.amazonaws.com/ecmodpacks/',

);

?>