# CKEditor

CKEditor 5 is an ultra-modern JavaScript rich text editor with MVC architecture, custom data model and virtual DOM. It is written from scratch in ES6 and has excellent webpack support. Native integrations with Angular, React and Vue are available for your convenience.

We use the classic editor build(23.0.0) part to custoimize. So related plugins will must comportable with that version. And add a image upload custom plugin from [CKEditor 5 Upload Adapter](https://github.com/RasmusRummel/ckeditor5-upload-adapter). And Try to add raw **PHP** code to implement. The configuration and setup is bellow here. All the demo include into **example** directory. 

## Creating the CKEditor 5 setup:

```javascript
ClassicEditor
    .create(document.querySelector('#editor'), {
        // ...

        uploadAdapter: {
            // URL to server-side http endpoint. It's mandatory
            uploadUrl: 'upload.php',

            // CSRF token 
            // token : '[YOUR-CSRF-TOKEN]', 
            
            // Optional. Eg. in asp.net core for CSRF prevention you would have 
            // headers : { "RequestVerificationToken": _serverSideGeneratedCSRFToken } 
            // headers : { 
            //     "headerKey1": "headerValue1", 
            //     "headerKey2": "headerValue2" 
            // }
        }

        // ...
});
```

## Adding a plugin to a build

To install plugins via npm use the bellow code.

```
npm install --save @ckeditor/ckeditor5-link
```

## Build Command 

After install plugins or, customize any configuration from *ckeditor.js* run the bellow commend.

```
npm run build
```
