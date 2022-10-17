<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-categories">
                                <a href="#endpoints-GETapi-products-categories">GET api/products/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products">
                                <a href="#endpoints-GETapi-products">GET api/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products--product_id-">
                                <a href="#endpoints-GETapi-products--product_id-">GET api/products/{product_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-search--keywords-">
                                <a href="#endpoints-GETapi-products-search--keywords-">GET api/products/search/{keywords}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-category--category_name-">
                                <a href="#endpoints-GETapi-products-category--category_name-">GET api/products/category/{category_name}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-products-add">
                                <a href="#endpoints-POSTapi-products-add">POST api/products/add</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-products--product_id-">
                                <a href="#endpoints-PUTapi-products--product_id-">PUT api/products/{product_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-products--product_id-">
                                <a href="#endpoints-DELETEapi-products--product_id-">DELETE api/products/{product_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 17, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-products-categories">GET api/products/categories</h2>

<p>
</p>



<span id="example-requests-GETapi-products-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/categories"
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

<span id="example-responses-GETapi-products-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;categories&quot;: [
        &quot;electronics&quot;,
        &quot;book&quot;,
        &quot;apparel&quot;
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-categories"></code></pre>
</span>
<span id="execution-error-GETapi-products-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-categories"></code></pre>
</span>
<form id="form-GETapi-products-categories" data-method="GET"
      data-path="api/products/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-categories"
                    onclick="tryItOut('GETapi-products-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-categories"
                    onclick="cancelTryOut('GETapi-products-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/categories</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-products">GET api/products</h2>

<p>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
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

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: [
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;Microwave&quot;,
            &quot;description&quot;: &quot;heat food using microwaves, a form of electromagnetic radiation similar to radio waves. Microwaves have three characteristics that allow them to be used in cooking: they are reflected by metal; they pass through glass, paper, plastic, and similar materials; and they are absorbed by foods.&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: &quot;4999.00&quot;,
            &quot;brand&quot;: &quot;Hanabishi&quot;,
            &quot;category&quot;: &quot;electronics&quot;,
            &quot;image&quot;: &quot;https://myhanabishi.com/wp-content/uploads/2020/03/HMO-20MBD.jpg&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 13,
            &quot;title&quot;: &quot;The Lord of the Rings&quot;,
            &quot;description&quot;: &quot;The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, intended to be Earth at some time in the distant past, the story began as a sequel to Tolkiens 1937 childrens book The Hobbit, but eventually developed into a much larger work.&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: &quot;4410.00&quot;,
            &quot;brand&quot;: &quot;Tolkien&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://static.wikia.nocookie.net/lotr/images/1/11/The_Lord_of_the_Rings_First_Copies.jpg/revision/latest?cb=20130619012726&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 14,
            &quot;title&quot;: &quot;DriFit&quot;,
            &quot;description&quot;: &quot;high-performance, microfiber, polyester fabric that moves sweat away from the body and to the fabric surface, where it evaporates.&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: &quot;1895.00&quot;,
            &quot;brand&quot;: &quot;Spike&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/873eaab7-cfec-4b70-b6af-19880a563637/england-strike-dri-fit-short-sleeve-football-top-kvxXF5.png&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products"></code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-products--product_id-">GET api/products/{product_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/12"
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

<span id="example-responses-GETapi-products--product_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: {
        &quot;id&quot;: 12,
        &quot;title&quot;: &quot;Microwave&quot;,
        &quot;description&quot;: &quot;heat food using microwaves, a form of electromagnetic radiation similar to radio waves. Microwaves have three characteristics that allow them to be used in cooking: they are reflected by metal; they pass through glass, paper, plastic, and similar materials; and they are absorbed by foods.&quot;,
        &quot;currency&quot;: &quot;PHP&quot;,
        &quot;price&quot;: &quot;4999.00&quot;,
        &quot;brand&quot;: &quot;Hanabishi&quot;,
        &quot;category&quot;: &quot;electronics&quot;,
        &quot;image&quot;: &quot;https://myhanabishi.com/wp-content/uploads/2020/03/HMO-20MBD.jpg&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--product_id-"></code></pre>
</span>
<span id="execution-error-GETapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--product_id-"></code></pre>
</span>
<form id="form-GETapi-products--product_id-" data-method="GET"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--product_id-"
                    onclick="tryItOut('GETapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--product_id-"
                    onclick="cancelTryOut('GETapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--product_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="product_id"
               data-endpoint="GETapi-products--product_id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

                    <h2 id="endpoints-GETapi-products-search--keywords-">GET api/products/search/{keywords}</h2>

<p>
</p>



<span id="example-requests-GETapi-products-search--keywords-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/search/non" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/search/non"
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

<span id="example-responses-GETapi-products-search--keywords-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;Result&quot;: &quot;No Data not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-search--keywords-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-search--keywords-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-search--keywords-"></code></pre>
</span>
<span id="execution-error-GETapi-products-search--keywords-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-search--keywords-"></code></pre>
</span>
<form id="form-GETapi-products-search--keywords-" data-method="GET"
      data-path="api/products/search/{keywords}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-search--keywords-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-search--keywords-"
                    onclick="tryItOut('GETapi-products-search--keywords-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-search--keywords-"
                    onclick="cancelTryOut('GETapi-products-search--keywords-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-search--keywords-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/search/{keywords}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>keywords</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="keywords"
               data-endpoint="GETapi-products-search--keywords-"
               value="non"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

                    <h2 id="endpoints-GETapi-products-category--category_name-">GET api/products/category/{category_name}</h2>

<p>
</p>



<span id="example-requests-GETapi-products-category--category_name-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/category/nihil" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/category/nihil"
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

<span id="example-responses-GETapi-products-category--category_name-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-category--category_name-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-category--category_name-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-category--category_name-"></code></pre>
</span>
<span id="execution-error-GETapi-products-category--category_name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-category--category_name-"></code></pre>
</span>
<form id="form-GETapi-products-category--category_name-" data-method="GET"
      data-path="api/products/category/{category_name}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-category--category_name-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-category--category_name-"
                    onclick="tryItOut('GETapi-products-category--category_name-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-category--category_name-"
                    onclick="cancelTryOut('GETapi-products-category--category_name-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-category--category_name-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/category/{category_name}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>category_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="category_name"
               data-endpoint="GETapi-products-category--category_name-"
               value="nihil"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

                    <h2 id="endpoints-POSTapi-products-add">POST api/products/add</h2>

<p>
</p>



<span id="example-requests-POSTapi-products-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/products/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"alghpbrssaouqicmuppankhfpdcjmuyjetwyyjuwoemovkellmrtcdgxnmpjhlnonnazlldmzxzdvfdbemqvxgvffbxvaqrpyfiatilitavqirekrvcjdrtkpidkulpkjkgicqexfqoqvfzfnofgjzytuyufxnmuzogwxfv\",
    \"description\": \"zltjqxfyfcwpzbvhecwetfrmsylxmepiolqnmehqjqwukdbvdmvuxknvlaf\",
    \"currency\": \"itbgbmfddjbwiqikavifxhrwmjqdmrpoaozutebiqhkliqxkmwpalfticxhdpnfhaxhbbyakkoyqqlduaqnflxvglnuejhwwpjvcgcomnxjkqsipqyudofbmrztgcffukvcnh\",
    \"price\": \"nqnhgiampuypqshdgqxbbhziompuibjonvhtubszvajjshqzmpcfquimqdigfyadqkczdeitiwftotfzdhenryvjpjgdeifzbtohyesdzahjtgrtztekfzspdlgaoymlcjlgqrxncubcaziiiccmltdpjcqocpxqheiounzjydg\",
    \"brand\": \"zuj\",
    \"category\": \"keysfvdpzpxjcefdkagvcdyajcoycodmvsklqtdmdgkaxaxfbqfchixhqlkbviwplvfgnfofxfogbirsexkzjakcyibkfuziwkbtbbfdwxuciyeenrmejlqkyuoecewrgkojwdwdimvhycsltfwexymgpotfydgfje\",
    \"image\": \"tfhwa\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "alghpbrssaouqicmuppankhfpdcjmuyjetwyyjuwoemovkellmrtcdgxnmpjhlnonnazlldmzxzdvfdbemqvxgvffbxvaqrpyfiatilitavqirekrvcjdrtkpidkulpkjkgicqexfqoqvfzfnofgjzytuyufxnmuzogwxfv",
    "description": "zltjqxfyfcwpzbvhecwetfrmsylxmepiolqnmehqjqwukdbvdmvuxknvlaf",
    "currency": "itbgbmfddjbwiqikavifxhrwmjqdmrpoaozutebiqhkliqxkmwpalfticxhdpnfhaxhbbyakkoyqqlduaqnflxvglnuejhwwpjvcgcomnxjkqsipqyudofbmrztgcffukvcnh",
    "price": "nqnhgiampuypqshdgqxbbhziompuibjonvhtubszvajjshqzmpcfquimqdigfyadqkczdeitiwftotfzdhenryvjpjgdeifzbtohyesdzahjtgrtztekfzspdlgaoymlcjlgqrxncubcaziiiccmltdpjcqocpxqheiounzjydg",
    "brand": "zuj",
    "category": "keysfvdpzpxjcefdkagvcdyajcoycodmvsklqtdmdgkaxaxfbqfchixhqlkbviwplvfgnfofxfogbirsexkzjakcyibkfuziwkbtbbfdwxuciyeenrmejlqkyuoecewrgkojwdwdimvhycsltfwexymgpotfydgfje",
    "image": "tfhwa"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products-add">
</span>
<span id="execution-results-POSTapi-products-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products-add"></code></pre>
</span>
<span id="execution-error-POSTapi-products-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products-add"></code></pre>
</span>
<form id="form-POSTapi-products-add" data-method="POST"
      data-path="api/products/add"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products-add"
                    onclick="tryItOut('POSTapi-products-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products-add"
                    onclick="cancelTryOut('POSTapi-products-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products-add" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/add</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-products-add"
               value="alghpbrssaouqicmuppankhfpdcjmuyjetwyyjuwoemovkellmrtcdgxnmpjhlnonnazlldmzxzdvfdbemqvxgvffbxvaqrpyfiatilitavqirekrvcjdrtkpidkulpkjkgicqexfqoqvfzfnofgjzytuyufxnmuzogwxfv"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-products-add"
               value="zltjqxfyfcwpzbvhecwetfrmsylxmepiolqnmehqjqwukdbvdmvuxknvlaf"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>currency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="currency"
               data-endpoint="POSTapi-products-add"
               value="itbgbmfddjbwiqikavifxhrwmjqdmrpoaozutebiqhkliqxkmwpalfticxhdpnfhaxhbbyakkoyqqlduaqnflxvglnuejhwwpjvcgcomnxjkqsipqyudofbmrztgcffukvcnh"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-products-add"
               value="nqnhgiampuypqshdgqxbbhziompuibjonvhtubszvajjshqzmpcfquimqdigfyadqkczdeitiwftotfzdhenryvjpjgdeifzbtohyesdzahjtgrtztekfzspdlgaoymlcjlgqrxncubcaziiiccmltdpjcqocpxqheiounzjydg"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="brand"
               data-endpoint="POSTapi-products-add"
               value="zuj"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="category"
               data-endpoint="POSTapi-products-add"
               value="keysfvdpzpxjcefdkagvcdyajcoycodmvsklqtdmdgkaxaxfbqfchixhqlkbviwplvfgnfofxfogbirsexkzjakcyibkfuziwkbtbbfdwxuciyeenrmejlqkyuoecewrgkojwdwdimvhycsltfwexymgpotfydgfje"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="image"
               data-endpoint="POSTapi-products-add"
               value="tfhwa"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-PUTapi-products--product_id-">PUT api/products/{product_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/products/12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"djmw\",
    \"description\": \"vhcdiprrpllptxozaszgnhihnmpbkyzrdfilnihxmkujajyeybrqfiavxwlibdzcorspwdumcocsxfmrkzjqqzfxbkieucnesqjxeomxlgxzbchnxmvubazkxfakrodjvqnthnpfdumeilmwflxiyitwkdsyvmmkudslggxqlfaanknuqgc\",
    \"currency\": \"iofuqabeghnbuxtijqysayskjzagqbjfla\",
    \"price\": \"traczcblfzdatvubdarfnroqm\",
    \"brand\": \"whxmffigmaydhrzwcgwemwsn\",
    \"category\": \"osfzfwmiafjtwjpgmkjmioiqysmwcinsatomrfaxvncwxpxoodfldgnveoxfherdjpccxmjnmlbkpxccgugwukdf\",
    \"image\": \"xnapaocpvjltrppeobxzslyibmphdkhtgxcnvgimzqoybiwjgjxybjpqplfasfcrgzlnbkjnawbuphwrngowldxwnwfaekckaplmja\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/12"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "djmw",
    "description": "vhcdiprrpllptxozaszgnhihnmpbkyzrdfilnihxmkujajyeybrqfiavxwlibdzcorspwdumcocsxfmrkzjqqzfxbkieucnesqjxeomxlgxzbchnxmvubazkxfakrodjvqnthnpfdumeilmwflxiyitwkdsyvmmkudslggxqlfaanknuqgc",
    "currency": "iofuqabeghnbuxtijqysayskjzagqbjfla",
    "price": "traczcblfzdatvubdarfnroqm",
    "brand": "whxmffigmaydhrzwcgwemwsn",
    "category": "osfzfwmiafjtwjpgmkjmioiqysmwcinsatomrfaxvncwxpxoodfldgnveoxfherdjpccxmjnmlbkpxccgugwukdf",
    "image": "xnapaocpvjltrppeobxzslyibmphdkhtgxcnvgimzqoybiwjgjxybjpqplfasfcrgzlnbkjnawbuphwrngowldxwnwfaekckaplmja"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-products--product_id-">
</span>
<span id="execution-results-PUTapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--product_id-"></code></pre>
</span>
<span id="execution-error-PUTapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--product_id-"></code></pre>
</span>
<form id="form-PUTapi-products--product_id-" data-method="PUT"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-products--product_id-"
                    onclick="tryItOut('PUTapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-products--product_id-"
                    onclick="cancelTryOut('PUTapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-products--product_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="product_id"
               data-endpoint="PUTapi-products--product_id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-products--product_id-"
               value="djmw"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-products--product_id-"
               value="vhcdiprrpllptxozaszgnhihnmpbkyzrdfilnihxmkujajyeybrqfiavxwlibdzcorspwdumcocsxfmrkzjqqzfxbkieucnesqjxeomxlgxzbchnxmvubazkxfakrodjvqnthnpfdumeilmwflxiyitwkdsyvmmkudslggxqlfaanknuqgc"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>currency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="currency"
               data-endpoint="PUTapi-products--product_id-"
               value="iofuqabeghnbuxtijqysayskjzagqbjfla"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="price"
               data-endpoint="PUTapi-products--product_id-"
               value="traczcblfzdatvubdarfnroqm"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="brand"
               data-endpoint="PUTapi-products--product_id-"
               value="whxmffigmaydhrzwcgwemwsn"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="category"
               data-endpoint="PUTapi-products--product_id-"
               value="osfzfwmiafjtwjpgmkjmioiqysmwcinsatomrfaxvncwxpxoodfldgnveoxfherdjpccxmjnmlbkpxccgugwukdf"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="image"
               data-endpoint="PUTapi-products--product_id-"
               value="xnapaocpvjltrppeobxzslyibmphdkhtgxcnvgimzqoybiwjgjxybjpqplfasfcrgzlnbkjnawbuphwrngowldxwnwfaekckaplmja"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 191 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-DELETEapi-products--product_id-">DELETE api/products/{product_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/products/12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/12"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--product_id-">
</span>
<span id="execution-results-DELETEapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product_id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product_id-"></code></pre>
</span>
<form id="form-DELETEapi-products--product_id-" data-method="DELETE"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--product_id-"
                    onclick="tryItOut('DELETEapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--product_id-"
                    onclick="cancelTryOut('DELETEapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--product_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="product_id"
               data-endpoint="DELETEapi-products--product_id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
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

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
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
