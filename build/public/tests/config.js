(function(global) {
    global.monkeytestjs = {
        "facebookId": "000000000000000",

        "local": {
            "env": ["DEV URL OR PART OF"]
        },
        "stage": {
            "env": ["STAGE URL OR PART OF"],
            "facebookId": "222222222222222"
        },
        "beta": {
            "env": ["BETA URL OR PART OF"],
            "facebookId": "33333333333333333"
        },
        "production": {
            "env": ["PRODUCTION URL OR PART OF"],
            "facebookId": "4444444444444444444"
        },
        "testsDir": "mytests",
        "globalTests": [
            "global/not_server_error.js",
            "global/is_html_w3c_valid.js", // The first task is done by this global test, so I just ignore it. I have implemented the following two tests below
            "global/has_utf8_metatag.js"

	    // Comment the following test, because I don't add a valid GA id. This is not required in the test
            /*"global/has_google_analytics.js"*/
        ],
        "pages": [
            {
                "url": "/",
                "tests": [ "enquiry/require_fields_test.js","enquiry/product_complaint_test.js" ]
            }
        ],
        "proxyUrl": "core/proxy.php?mode=native&url=<%= url %>",
        "loadSources": true
    };
})(this);
