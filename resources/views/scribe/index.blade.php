<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>AllView Clinic</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.21.2.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.21.2.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-patient--id--sms">
                                <a href="#endpoints-POSTapi-patient--id--sms">POST api/patient/{id}/sms</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-patient">
                                <a href="#endpoints-POSTapi-patient">POST api/patient</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-patient--id-">
                                <a href="#endpoints-GETapi-patient--id-">GET api/patient/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-doc">
                                <a href="#endpoints-GETapi-doc">GET api/doc</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 28, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>API to manage patients and their records for AllView Clinic.</p>
<aside>
    <strong>Base URL</strong>: <code>http://localhost/api</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-patient--id--sms">POST api/patient/{id}/sms</h2>

<p>
</p>



<span id="example-requests-POSTapi-patient--id--sms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/api/patient/1/sms" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/api/patient/1/sms"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-patient--id--sms">
</span>
<span id="execution-results-POSTapi-patient--id--sms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-patient--id--sms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patient--id--sms"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-patient--id--sms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patient--id--sms">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-patient--id--sms" data-method="POST"
      data-path="api/patient/{id}/sms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-patient--id--sms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-patient--id--sms"
                    onclick="tryItOut('POSTapi-patient--id--sms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-patient--id--sms"
                    onclick="cancelTryOut('POSTapi-patient--id--sms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-patient--id--sms"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/patient/{id}/sms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-patient--id--sms"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-patient--id--sms"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="POSTapi-patient--id--sms"
               value="1"
               data-component="url">
    <br>
<p>The ID of the patient. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-patient">POST api/patient</h2>

<p>
</p>



<span id="example-requests-POSTapi-patient">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/api/patient" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/api/patient"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-patient">
</span>
<span id="execution-results-POSTapi-patient" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-patient"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patient"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-patient" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patient">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-patient" data-method="POST"
      data-path="api/patient"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-patient', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-patient"
                    onclick="tryItOut('POSTapi-patient');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-patient"
                    onclick="cancelTryOut('POSTapi-patient');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-patient"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/patient</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-patient"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-patient"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-patient--id-">GET api/patient/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-patient--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/api/patient/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/api/patient/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-patient--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Ms. Emelia Crooks V&quot;,
    &quot;phone&quot;: &quot;+1 (716) 238-9312&quot;,
    &quot;email&quot;: &quot;isom20@example.org&quot;,
    &quot;created_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;,
    &quot;deleted_at&quot;: null,
    &quot;records&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;patient_id&quot;: 1,
            &quot;description&quot;: &quot;Quisquam officiis odio possimus a et omnis pariatur.&quot;,
            &quot;created_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;patient_id&quot;: 1,
            &quot;description&quot;: &quot;Error iure facere cumque quam minima.&quot;,
            &quot;created_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;patient_id&quot;: 1,
            &quot;description&quot;: &quot;Aut eos est eius rem.&quot;,
            &quot;created_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-06-26T23:21:33.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-patient--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-patient--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patient--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-patient--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patient--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-patient--id-" data-method="GET"
      data-path="api/patient/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-patient--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-patient--id-"
                    onclick="tryItOut('GETapi-patient--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-patient--id-"
                    onclick="cancelTryOut('GETapi-patient--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-patient--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/patient/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-patient--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-patient--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-patient--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the patient. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-doc">GET api/doc</h2>

<p>
</p>



<span id="example-requests-GETapi-doc">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/api/doc" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/api/doc"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-doc">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6ImNnc0s2UGVqWnlreFpyTDNhajFWWVE9PSIsInZhbHVlIjoickl6OElYVWRCcHYvK2NWdTNtd2Erbkppd0EwamxvUXlyMW5uN1dTSE5ZRHpsZGhUUFJjVkRCMytJM3Z3Y241R0lFZk1JY00rMWJXWllHWm12MDl6REk4ZUVYTHRVK25ZRDF5aEp2aTZFTU9JZkovTWhNOHQ2ZlRFS3hUQWZrMVgiLCJtYWMiOiJlODI0Y2M5MmRmMDczYTRiMWJjODFkMzMwYmEwZWQ2OTE4ZDU2YzExODEwMDYzODZjM2RkMGI4NjliYTlhMzIxIiwidGFnIjoiIn0%3D; expires=Wed, 28 Jun 2023 14:17:59 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkVlTjcrOXEwV2F1NSt1NnkxWVFwUHc9PSIsInZhbHVlIjoiRUFmdXZTQ2JNd3pYWXNzYnd0TWFTclFxaS9PR2RrbXd0MlFjSnBQRWRNQktNRDdHTk1acDRvUXJXNmF3VklCeHdNalo0UW9qSTZoWXZYMGhKMXExMjZmU0lScTFiOVFsMThyZy9rTFIwbHkwTk5OQVc3alp1aWpSdVVYa1RPQVIiLCJtYWMiOiI5OWI2YjY5NDdiMWJmZDM2NjlmMzU3ZGM0MzJhZGM3NjE0NTEyODY3YTg0ODQ1NjY4NDBjZmM0YmUwOTI0ZjI1IiwidGFnIjoiIn0%3D; expires=Wed, 28 Jun 2023 14:17:59 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta content=&quot;IE=edge,chrome=1&quot; http-equiv=&quot;X-UA-Compatible&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;
    &lt;title&gt;AllView Clinic&lt;/title&gt;

    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/api/vendor/scribe/css/theme-default.style.css&quot; media=&quot;screen&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/api/vendor/scribe/css/theme-default.print.css&quot; media=&quot;print&quot;&gt;

    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js&quot;&gt;&lt;/script&gt;

    &lt;link rel=&quot;stylesheet&quot;
          href=&quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css&quot;&gt;
    &lt;script src=&quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js&quot;&gt;&lt;/script&gt;

    &lt;style id=&quot;language-style&quot;&gt;
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            &lt;/style&gt;

    &lt;script&gt;
        var tryItOutBaseUrl = &quot;http://localhost&quot;;
        var useCsrf = Boolean();
        var csrfUrl = &quot;/sanctum/csrf-cookie&quot;;
    &lt;/script&gt;
    &lt;script src=&quot;http://localhost/api/vendor/scribe/js/tryitout-4.21.2.js&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;http://localhost/api/vendor/scribe/js/theme-default-4.21.2.js&quot;&gt;&lt;/script&gt;

&lt;/head&gt;

&lt;body data-languages=&quot;[&amp;quot;bash&amp;quot;,&amp;quot;javascript&amp;quot;]&quot;&gt;

&lt;a href=&quot;#&quot; id=&quot;nav-button&quot;&gt;
    &lt;span&gt;
        MENU
        &lt;img src=&quot;http://localhost/api/vendor/scribe/images/navbar.png&quot; alt=&quot;navbar-image&quot;/&gt;
    &lt;/span&gt;
&lt;/a&gt;
&lt;div class=&quot;tocify-wrapper&quot;&gt;
    
            &lt;div class=&quot;lang-selector&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;bash&quot;&gt;bash&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;javascript&quot;&gt;javascript&lt;/button&gt;
                    &lt;/div&gt;
    
    &lt;div class=&quot;search&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;search&quot; id=&quot;input-search&quot; placeholder=&quot;Search&quot;&gt;
    &lt;/div&gt;

    &lt;div id=&quot;toc&quot;&gt;
                    &lt;ul id=&quot;tocify-header-introduction&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;introduction&quot;&gt;
                    &lt;a href=&quot;#introduction&quot;&gt;Introduction&lt;/a&gt;
                &lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-authenticating-requests&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;authenticating-requests&quot;&gt;
                    &lt;a href=&quot;#authenticating-requests&quot;&gt;Authenticating requests&lt;/a&gt;
                &lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-endpoints&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;endpoints&quot;&gt;
                    &lt;a href=&quot;#endpoints&quot;&gt;Endpoints&lt;/a&gt;
                &lt;/li&gt;
                                    &lt;ul id=&quot;tocify-subheader-endpoints&quot; class=&quot;tocify-subheader&quot;&gt;
                                                    &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-user&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-user&quot;&gt;GET api/user&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-patient--id--sms&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-patient--id--sms&quot;&gt;POST api/patient/{id}/sms&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-patient&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-patient&quot;&gt;POST api/patient&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-patient--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-patient--id-&quot;&gt;GET api/patient/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                            &lt;/ul&gt;
            &lt;/div&gt;

    &lt;ul class=&quot;toc-footer&quot; id=&quot;toc-footer&quot;&gt;
                    &lt;li style=&quot;padding-bottom: 5px;&quot;&gt;&lt;a href=&quot;http://localhost/api/doc.postman&quot;&gt;View Postman collection&lt;/a&gt;&lt;/li&gt;
                            &lt;li style=&quot;padding-bottom: 5px;&quot;&gt;&lt;a href=&quot;http://localhost/api/doc.openapi&quot;&gt;View OpenAPI spec&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;http://github.com/knuckleswtf/scribe&quot;&gt;Documentation powered by Scribe ✍&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class=&quot;toc-footer&quot; id=&quot;last-updated&quot;&gt;
        &lt;li&gt;Last updated: June 28, 2023&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;page-wrapper&quot;&gt;
    &lt;div class=&quot;dark-box&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
        &lt;h1 id=&quot;introduction&quot;&gt;Introduction&lt;/h1&gt;
&lt;p&gt;API to manage patients and their records for AllView Clinic.&lt;/p&gt;
&lt;aside&gt;
    &lt;strong&gt;Base URL&lt;/strong&gt;: &lt;code&gt;http://localhost/api&lt;/code&gt;
&lt;/aside&gt;
&lt;p&gt;This documentation aims to provide all the information you need to work with our API.&lt;/p&gt;
&lt;aside&gt;As you scroll, you&#039;ll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;

        &lt;h1 id=&quot;authenticating-requests&quot;&gt;Authenticating requests&lt;/h1&gt;
&lt;p&gt;This API is not authenticated.&lt;/p&gt;

        &lt;h1 id=&quot;endpoints&quot;&gt;Endpoints&lt;/h1&gt;

    

                                &lt;h2 id=&quot;endpoints-GETapi-user&quot;&gt;GET api/user&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-user&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/api/user&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/api/user&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-user&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-user&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-user&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-user&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-user&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-user&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-user&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/user&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-user&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-user&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-user&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-user&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-user&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-user&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/user&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-user&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-user&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-patient--id--sms&quot;&gt;POST api/patient/{id}/sms&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-patient--id--sms&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/api/patient/1/sms&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/api/patient/1/sms&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-patient--id--sms&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-patient--id--sms&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-patient--id--sms&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-patient--id--sms&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-patient--id--sms&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-patient--id--sms&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-patient--id--sms&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/patient/{id}/sms&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-patient--id--sms&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-patient--id--sms&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-patient--id--sms&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-patient--id--sms&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-patient--id--sms&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-patient--id--sms&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/patient/{id}/sms&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-patient--id--sms&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-patient--id--sms&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               name=&quot;id&quot;                data-endpoint=&quot;POSTapi-patient--id--sms&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the patient. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-patient&quot;&gt;POST api/patient&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-patient&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/api/patient&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/api/patient&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-patient&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-patient&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-patient&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-patient&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-patient&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-patient&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-patient&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/patient&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-patient&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-patient&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-patient&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-patient&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-patient&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-patient&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/patient&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-patient&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-patient&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-patient--id-&quot;&gt;GET api/patient/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-patient--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/api/patient/1&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/api/patient/1&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-patient--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;id&amp;quot;: 1,
    &amp;quot;name&amp;quot;: &amp;quot;Ms. Emelia Crooks V&amp;quot;,
    &amp;quot;phone&amp;quot;: &amp;quot;+1 (716) 238-9312&amp;quot;,
    &amp;quot;email&amp;quot;: &amp;quot;isom20@example.org&amp;quot;,
    &amp;quot;created_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;,
    &amp;quot;updated_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;,
    &amp;quot;deleted_at&amp;quot;: null,
    &amp;quot;records&amp;quot;: [
        {
            &amp;quot;id&amp;quot;: 1,
            &amp;quot;patient_id&amp;quot;: 1,
            &amp;quot;description&amp;quot;: &amp;quot;Quisquam officiis odio possimus a et omnis pariatur.&amp;quot;,
            &amp;quot;created_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;,
            &amp;quot;updated_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;
        },
        {
            &amp;quot;id&amp;quot;: 2,
            &amp;quot;patient_id&amp;quot;: 1,
            &amp;quot;description&amp;quot;: &amp;quot;Error iure facere cumque quam minima.&amp;quot;,
            &amp;quot;created_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;,
            &amp;quot;updated_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;
        },
        {
            &amp;quot;id&amp;quot;: 3,
            &amp;quot;patient_id&amp;quot;: 1,
            &amp;quot;description&amp;quot;: &amp;quot;Aut eos est eius rem.&amp;quot;,
            &amp;quot;created_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;,
            &amp;quot;updated_at&amp;quot;: &amp;quot;2023-06-26T23:21:33.000000Z&amp;quot;
        }
    ]
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-patient--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-patient--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-patient--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-patient--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-patient--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-patient--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/patient/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-patient--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-patient--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-patient--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-patient--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-patient--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-patient--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/patient/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-patient--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
               name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-patient--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               name=&quot;id&quot;                data-endpoint=&quot;GETapi-patient--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the patient. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

            

        
    &lt;/div&gt;
    &lt;div class=&quot;dark-box&quot;&gt;
                    &lt;div class=&quot;lang-selector&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;bash&quot;&gt;bash&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;javascript&quot;&gt;javascript&lt;/button&gt;
                            &lt;/div&gt;
            &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-doc" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-doc"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-doc"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-doc" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-doc">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-doc" data-method="GET"
      data-path="api/doc"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-doc', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-doc"
                    onclick="tryItOut('GETapi-doc');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-doc"
                    onclick="cancelTryOut('GETapi-doc');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-doc"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/doc</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-doc"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-doc"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
