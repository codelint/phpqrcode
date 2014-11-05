<?php
/*
 * PHP QR Code encoder
 *
 * Config file, feel free to modify
 */

// use cache - more disk reads but less CPU power, masks and format templates are stored there
define('QR_CACHEABLE', false);
define('QR_CACHE_DIR', false); // used when QR_CACHEABLE === true
define('QR_LOG_DIR', false); // default error logs dir

/**
 * if true, estimates best mask
 * spec.
 *      default, but extremally slow;
 *      set to false to significant performance boost but (propably) worst quality code
 */
define('QR_FIND_BEST_MASK', true);
// if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly
define('QR_FIND_FROM_RANDOM', false);
define('QR_DEFAULT_MASK', 2); // when QR_FIND_BEST_MASK === false

// maximum allowed png image width (in pixels), tune to make sure GD and PHP can handle such big images
define('QR_PNG_MAXIMUM_SIZE', 1024);
                                                  