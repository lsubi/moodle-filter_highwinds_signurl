moodle-filter_highwinds_signurl
================================

This Moodle filter recognises highwinds URLs from the URL defined in the 
filter settings and replaces them with signed URLs.

See https://support.highwinds.com/customer/en/portal/articles/2861034-content-access-authentication?b_id=15425
for more details

Installation
------------

Simply place the filter files in ./filter/highwinds_signurl 

Setup
-----

In the filter settings you will need to define the URL for the highwinds CNAME target
along with the Passphrase and Passphrase Name to use for the signing process.

See https://support.highwinds.com/customer/en/portal/articles/2861034-content-access-authentication?b_id=15425
