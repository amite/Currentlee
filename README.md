Currentlee for ExpressionEngine 2.1
=========

**Currentlee** is a plugin that will return either the uri (segment_1/segment_2 etc...) or the url (http://www.example.com/segment_1/segment_2 etc...) for the current page from an EE2 template.

Installation. The directory */currentlee* should be placed in */system/expressionengine/third_party/*

## Usage

{exp:currentlee} returns current page URI (default) - (/segment_1/segment_2/ ...)

{exp:currentlee type="uri"} returns the same as above (redundant)

{exp:currentlee type="url"} returns the current page URL (http://www.example.com/segment_1/segment_2/ ...)

#### Examples

	<p>If you look in the address bar of this page you will see {exp:currentlee type='url'}</p>
	
	<p>If you took the domain name of this page away you would see {exp:currentlee}</p>
	
#### Good For?

The return value of a login form.

	<form id="login_form" return="{exp:currentlee type='url'}">