# Contact Form 7 Auto Class
When using HubSpot and other CRMs to track nativ eofrm submissions, the forms are identified by their class name.  
By default, all cf7 forms will show up as `".wpcf7-form, .init"`.  

There is an attribute that can be added to the shortcode used to embed the form `html_class="my-custom-class"`.  

This plugin checks to see if the `html_class` attribute has been used, and if not, adds the slug of the form title.  

All of your forms will then be separated out in the CRM so you can easily identify which form each submission came from.
