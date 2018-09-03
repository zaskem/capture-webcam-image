# capture-webcam-image
Example files for obtaining periodic JPG images from an Internet-connected webcam (Axis is our make of choice).
## Dependencies
Operating Environment:
* Designed for use in a LAMP environment, but could be used in any environment with PHP with minor modifications.
## The Execution:
* `imagecapture.php`
    * Will pull a local copy of the webcam image via cURL.
* crontab
    * No crontab example is provided.
## A Real Use Case/Some History
This script has been repeatedly used in production environments to obtain still images from an Internet-connected webcam. See the [`batch-ship-to-teamdrive`](https://github.com/zaskem/batch-ship-to-teamdrive) repository for information on how to automatically ship these images to a Google Team Drive.