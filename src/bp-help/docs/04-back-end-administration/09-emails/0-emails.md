#Emails

BuddyBoss Platform features a customizable email API. To access this feature navigate to Dashboard -> Emails.

BuddyBoss Emails
----------------

Emails are a WordPress Custom post Type. They are edited and created just like posts and pages.

The biggest difference you will notice is the use of [tokens](https://www.buddyboss.com/resources/docs/emails/email-tokens/). They have the curly braces around them `{{ }}`. Tokens are variable words or phrases that will be dynamically replaced when an email is sent.

[![BuddyBoss Emails](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemails-1024x527.jpg)](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemails.jpg)

Edit Emails
-----------

Just like posts and pages the contents of editing an email are as follows:

1.  Title
2.  Content
3.  Custom Field (Plain text email content)
4.  Publish
5.  Situation - Select which action triggers the sending of an email.
    *   NOTE: Available [tokens](https://www.buddyboss.com/resources/docs/emails/email-tokens/) are based on the situation.

[![Edit Emails](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemailsedit-1024x823.jpg)](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemailsedit.jpg)

Customize Emails
----------------

Customize BuddyBoss Emails using the Customizer tool. The default color scheme is a light and airy neutral gray with blue call-to-action.

![](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemailscustomizemenu.jpg)

There are three sections that can be edited: Header, Body and Footer. Click on each section to access the editing tools.

NOTE: The customizer will only display the Send Message template but you are affecting all email templates.

[![Customize BuddyBoss Emails](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemailscustomize-1024x562.jpg)](https://www.buddyboss.com/resources/wp-content/uploads/2019/01/buddybossemailscustomize.jpg)

Customize Header
----------------

*   Logo Upload - The logo size is currently restricted due to email formatting restrictions. Try a 1:4 height to width aspect ratio for best results.
*   Site Title Color
*   Site Title text size
*   Recipient color
*   Recipient text size

https://vimeo.com/320529935

Customize Body
--------------

*   Email background color
*   Body background color
*   Body border color
*   Body primary text color
*   Body secondary text color
*   Body text size
*   Quote background color - Message from activity
*   Links and buttons color - Member Name and Reply button

https://vimeo.com/320529855

Customize Footer
----------------

*   Footer text
*   Footer text color
*   Footer text size

https://vimeo.com/320529897

Custom Email Template
---------------------

If the provided options are not enough you can custom code your own template. To do that you will need to copy the default email template

`/wp-content/plugins/buddypress/bp-templates/bp-nouveau/buddypress/assets/emails/single-bp-email.php`

and place a copy in your theme folder here

`/wp-content/themes/{{Your Theme}}/buddypress/assests/emails/single-bp-email.php`

Disable BuddyBoss Platform Emails
---------------------------------

Add the following code to `wp-content/plugins/bp-custom.php`:

    add_filter( 'bp_email_use_wp_mail', '__return_true' );