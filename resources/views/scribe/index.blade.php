<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

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
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-courses-instructors">
                                <a href="#endpoints-GETapi-courses-instructors">GET api/courses/instructors</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-courses">
                                <a href="#endpoints-GETapi-courses">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-courses">
                                <a href="#endpoints-POSTapi-courses">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-courses--id-">
                                <a href="#endpoints-PUTapi-courses--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-courses--id-">
                                <a href="#endpoints-GETapi-courses--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-courses--id-">
                                <a href="#endpoints-DELETEapi-courses--id-">Remove the specified resource from storage.</a>
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
        <li>Last updated: January 4, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

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
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
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
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-courses-instructors">GET api/courses/instructors</h2>

<p>
</p>



<span id="example-requests-GETapi-courses-instructors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/courses/instructors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courses/instructors"
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

<span id="example-responses-GETapi-courses-instructors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Eliezer Walter III&quot;,
            &quot;email&quot;: &quot;okulas@example.com&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Maci Schuppe&quot;,
            &quot;email&quot;: &quot;nikita32@example.com&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Mr. Al Ratke DVM&quot;,
            &quot;email&quot;: &quot;roel77@example.com&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: null,
        &quot;last&quot;: null,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;path&quot;: &quot;http://localhost/api/courses/instructors&quot;,
        &quot;per_page&quot;: 100,
        &quot;next_cursor&quot;: null,
        &quot;prev_cursor&quot;: null
    },
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courses-instructors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courses-instructors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses-instructors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courses-instructors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses-instructors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courses-instructors" data-method="GET"
      data-path="api/courses/instructors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courses-instructors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courses-instructors"
                    onclick="tryItOut('GETapi-courses-instructors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courses-instructors"
                    onclick="cancelTryOut('GETapi-courses-instructors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courses-instructors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courses/instructors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courses-instructors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courses-instructors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-courses">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-courses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/courses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courses"
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

<span id="example-responses-GETapi-courses">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Nuevo Curso 21&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Similique debitis saepe perspiciatis quis neque debitis laudantium.&quot;,
                    &quot;description&quot;: &quot;Officia vero corporis quam culpa. Aliquid tempore debitis ex est voluptas. Ea repellendus quam voluptates suscipit nisi fuga sunt eos.&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Alias et quis voluptatem quo.&quot;,
                    &quot;description&quot;: &quot;Id cumque vitae necessitatibus nobis qui dicta. Doloremque sit voluptate tempore tenetur amet quia optio nihil. Necessitatibus et et accusantium nihil aut optio odio.&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Sequi odio quasi quaerat.&quot;,
                    &quot;description&quot;: &quot;Hic explicabo maxime voluptas accusamus molestiae et dolores. Accusantium reiciendis distinctio maxime at nesciunt ab. Delectus ipsa et reprehenderit quo qui nulla et.&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;Dolores ut totam iste facere facere recusandae eius.&quot;,
                    &quot;description&quot;: &quot;Debitis explicabo ducimus commodi veritatis debitis est. Sapiente sed dolore laboriosam. Voluptas vel fugiat totam ducimus maxime iste porro quae.&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;title&quot;: &quot;Et tempora eum facilis velit quibusdam quibusdam eos.&quot;,
                    &quot;description&quot;: &quot;Dolores quibusdam optio pariatur sunt aut ut ullam. Possimus in explicabo similique. Aliquid voluptatum magni fugiat ut.&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;In quis doloribus eum.&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Excepturi voluptatem corrupti sed delectus suscipit consequatur.&quot;,
                    &quot;description&quot;: &quot;Ipsam in voluptatem error iure et est. Rerum hic aut qui non. Molestiae id qui aut autem aperiam. Ut nihil consequuntur reiciendis.&quot;
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;Aut in quas laborum sapiente et magni.&quot;,
                    &quot;description&quot;: &quot;Voluptatum voluptatem eum in distinctio quod occaecati. Dolorem voluptates beatae vitae impedit. Alias minus inventore incidunt aliquam. Autem nihil earum deserunt distinctio.&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Ad fugit ut est distinctio.&quot;,
                    &quot;description&quot;: &quot;Vitae maxime est reprehenderit dolorem est numquam aliquam. Ullam odio et aut eaque totam cumque.&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Quisquam nesciunt ex vitae est id perspiciatis.&quot;,
                    &quot;description&quot;: &quot;Cupiditate dolor inventore sit. Dicta sit et est qui voluptatem quod fuga. Aspernatur in non mollitia autem quos et ullam dolores. Qui incidunt omnis suscipit debitis blanditiis.&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;title&quot;: &quot;Corrupti sed porro earum vel tempora at.&quot;,
                    &quot;description&quot;: &quot;Illum excepturi voluptatibus eius nobis sed est. Rerum doloremque non distinctio tempora. Nemo tempora accusantium pariatur odio voluptates.&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;Illum at nulla est est est reiciendis.&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Maci Schuppe&quot;,
                &quot;email&quot;: &quot;nikita32@example.com&quot;
            },
            &quot;lessons&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;title&quot;: &quot;Reiciendis molestias exercitationem nulla quia eligendi et.&quot;,
                    &quot;description&quot;: &quot;Id quo illo sit labore est. Beatae molestiae optio corrupti molestiae quidem aut. Dicta nostrum nulla maiores et quasi qui sint incidunt.&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Error harum sapiente ut perferendis aut id.&quot;,
                    &quot;description&quot;: &quot;Architecto optio mollitia distinctio. Ipsam aliquam cumque hic totam et repellat.&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;title&quot;: &quot;Est voluptas debitis maxime sed dicta tempore.&quot;,
                    &quot;description&quot;: &quot;Iste laudantium optio pariatur sequi quae itaque quaerat excepturi. Dolorem tenetur est est sint. Et praesentium consequatur dolor. Eos non a laborum quasi ut dignissimos.&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;title&quot;: &quot;Sed ex eum officiis.&quot;,
                    &quot;description&quot;: &quot;Aut dolor repudiandae cum quaerat sit reprehenderit. Rerum illo ut libero ad. Et ea quasi dolor in excepturi esse.&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;title&quot;: &quot;Cupiditate sed commodi ea enim.&quot;,
                    &quot;description&quot;: &quot;Porro cumque excepturi omnis recusandae commodi. Aut fugit voluptate deserunt aliquam reprehenderit nihil sunt commodi. Aut et pariatur nisi eligendi praesentium.&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;Itaque hic dignissimos consequuntur at.&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Maci Schuppe&quot;,
                &quot;email&quot;: &quot;nikita32@example.com&quot;
            },
            &quot;lessons&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;title&quot;: &quot;Quo voluptas architecto est est.&quot;,
                    &quot;description&quot;: &quot;Perspiciatis reiciendis delectus optio ipsa. Maiores voluptas ut explicabo nisi nihil. Voluptatem tempore ut eos.&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;title&quot;: &quot;Culpa porro animi ratione nihil.&quot;,
                    &quot;description&quot;: &quot;Ea voluptate sint dolores possimus omnis saepe esse. Minima dolorum deserunt maiores voluptatem. Corporis aut sit error exercitationem quo non.&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;title&quot;: &quot;Rerum necessitatibus inventore perferendis error sed.&quot;,
                    &quot;description&quot;: &quot;Illo dolore velit voluptatum error minima. Neque voluptas iusto magnam soluta voluptates animi et. Ullam dicta unde nobis corporis explicabo nostrum.&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;title&quot;: &quot;Vitae aut iure dicta.&quot;,
                    &quot;description&quot;: &quot;Et est similique magnam similique. Accusamus laboriosam amet asperiores ipsam repellendus molestiae autem. Sed tempora perferendis consequuntur omnis commodi. Temporibus consectetur id quo possimus quae eos.&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;title&quot;: &quot;Possimus quos eius esse in debitis impedit.&quot;,
                    &quot;description&quot;: &quot;Quasi facere minima ullam excepturi exercitationem reprehenderit natus. Consequatur ut qui aut sed fuga repellendus sed. Excepturi totam aliquid corrupti quisquam non accusantium. Sit mollitia et sed harum.&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;Et autem doloribus omnis ipsum.&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Mr. Al Ratke DVM&quot;,
                &quot;email&quot;: &quot;roel77@example.com&quot;
            },
            &quot;lessons&quot;: [
                {
                    &quot;id&quot;: 21,
                    &quot;title&quot;: &quot;Amet dolores quod provident explicabo quasi asperiores magnam vel.&quot;,
                    &quot;description&quot;: &quot;Doloremque voluptatum at quam laudantium. Harum sit aut labore molestias unde officiis ut. Et velit nihil iusto in. Reprehenderit odio qui veritatis dolore velit aliquid.&quot;
                },
                {
                    &quot;id&quot;: 22,
                    &quot;title&quot;: &quot;Facere sit inventore voluptatem doloribus eos.&quot;,
                    &quot;description&quot;: &quot;Iure enim voluptas iusto similique. Ducimus velit veniam est dolores labore dolor aperiam. Doloremque cum porro repudiandae odio ex. Qui ullam neque nostrum velit voluptatem consequuntur quam impedit.&quot;
                },
                {
                    &quot;id&quot;: 23,
                    &quot;title&quot;: &quot;Molestias hic laboriosam consectetur distinctio a ut.&quot;,
                    &quot;description&quot;: &quot;Dicta porro iusto voluptates molestiae praesentium sequi. Consequatur laudantium nobis veniam qui iste illum.&quot;
                },
                {
                    &quot;id&quot;: 24,
                    &quot;title&quot;: &quot;Maiores temporibus nulla omnis dolore.&quot;,
                    &quot;description&quot;: &quot;Earum id aut vitae tempore et sed eum. Optio mollitia dolore quasi et. Est voluptatem saepe cumque enim consequatur. Voluptate ut ut iure quia.&quot;
                },
                {
                    &quot;id&quot;: 25,
                    &quot;title&quot;: &quot;Nihil alias occaecati ab nihil aut aperiam.&quot;,
                    &quot;description&quot;: &quot;Velit non provident ut consequatur. Cupiditate labore rerum fuga est voluptatibus a quod architecto. Consequuntur alias deleniti consequatur non maiores ratione non.&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;A facilis aut eius nisi.&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Mr. Al Ratke DVM&quot;,
                &quot;email&quot;: &quot;roel77@example.com&quot;
            },
            &quot;lessons&quot;: [
                {
                    &quot;id&quot;: 26,
                    &quot;title&quot;: &quot;Illum laudantium eveniet modi quasi.&quot;,
                    &quot;description&quot;: &quot;Non voluptatem aliquam explicabo dicta est quia ullam. Eaque consequatur dolor quasi est consequatur reprehenderit. Autem sed quo laboriosam. Sed sint similique laborum sapiente ad. Fugiat quia neque consequatur non sit.&quot;
                },
                {
                    &quot;id&quot;: 27,
                    &quot;title&quot;: &quot;Repudiandae et ut quibusdam earum ut officia.&quot;,
                    &quot;description&quot;: &quot;Aut quaerat et adipisci et molestiae. Eius cupiditate reiciendis similique fugiat illum et quasi quas. Numquam saepe non sit.&quot;
                },
                {
                    &quot;id&quot;: 28,
                    &quot;title&quot;: &quot;Quia fugit dignissimos officia cum et dicta in.&quot;,
                    &quot;description&quot;: &quot;Ut error omnis aut tempora omnis et dolorum. Error enim veniam in nam aut tempora officia id. Eos ea necessitatibus ut blanditiis. Dolores voluptatum molestiae autem est neque perferendis.&quot;
                },
                {
                    &quot;id&quot;: 29,
                    &quot;title&quot;: &quot;Molestiae natus sed vero dolor ratione quasi.&quot;,
                    &quot;description&quot;: &quot;Doloremque eum quae labore asperiores est. Et adipisci ipsum et consequatur. Voluptatem tempora ratione natus ipsum quidem dolorem.&quot;
                },
                {
                    &quot;id&quot;: 30,
                    &quot;title&quot;: &quot;Veritatis soluta ipsum nemo ab.&quot;,
                    &quot;description&quot;: &quot;Dolor neque dicta voluptas iusto est sint provident. Impedit minus earum deserunt in voluptatem eveniet ullam. Excepturi perspiciatis voluptas optio odit sequi id. Eaque itaque voluptatem ipsum aliquid voluptas molestiae.&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;Nuevo Curso&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 13,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 14,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        },
        {
            &quot;id&quot;: 15,
            &quot;title&quot;: &quot;Nuevo Curso 2&quot;,
            &quot;instructor&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Eliezer Walter III&quot;,
                &quot;email&quot;: &quot;okulas@example.com&quot;
            },
            &quot;lessons&quot;: []
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: null,
        &quot;last&quot;: null,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;path&quot;: &quot;http://localhost/api/courses&quot;,
        &quot;per_page&quot;: 100,
        &quot;next_cursor&quot;: null,
        &quot;prev_cursor&quot;: null
    },
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courses" data-method="GET"
      data-path="api/courses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courses"
                    onclick="tryItOut('GETapi-courses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courses"
                    onclick="cancelTryOut('GETapi-courses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-courses">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-courses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/courses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"instructor_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "instructor_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-courses">
</span>
<span id="execution-results-POSTapi-courses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-courses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-courses" data-method="POST"
      data-path="api/courses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-courses"
                    onclick="tryItOut('POSTapi-courses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-courses"
                    onclick="cancelTryOut('POSTapi-courses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-courses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/courses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-courses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-courses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-courses"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>instructor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="instructor_id"                data-endpoint="POSTapi-courses"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-courses--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-courses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/courses/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"instructor_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courses/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "instructor_id": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-courses--id-">
</span>
<span id="execution-results-PUTapi-courses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-courses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-courses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-courses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-courses--id-" data-method="PUT"
      data-path="api/courses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-courses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-courses--id-"
                    onclick="tryItOut('PUTapi-courses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-courses--id-"
                    onclick="cancelTryOut('PUTapi-courses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-courses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/courses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-courses--id-"
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
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-courses--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the course. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-courses--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>instructor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="instructor_id"                data-endpoint="PUTapi-courses--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the instructors table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-courses--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-courses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/courses/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courses/1"
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

<span id="example-responses-GETapi-courses--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Nuevo Curso 21&quot;,
        &quot;instructor&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Eliezer Walter III&quot;,
            &quot;email&quot;: &quot;okulas@example.com&quot;
        },
        &quot;lessons&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Similique debitis saepe perspiciatis quis neque debitis laudantium.&quot;,
                &quot;description&quot;: &quot;Officia vero corporis quam culpa. Aliquid tempore debitis ex est voluptas. Ea repellendus quam voluptates suscipit nisi fuga sunt eos.&quot;,
                &quot;video&quot;: {
                    &quot;id&quot;: 1,
                    &quot;url&quot;: &quot;http://hamill.info/dicta-maiores-suscipit-aspernatur-repudiandae-perferendis-eum&quot;,
                    &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Alias et quis voluptatem quo.&quot;,
                &quot;description&quot;: &quot;Id cumque vitae necessitatibus nobis qui dicta. Doloremque sit voluptate tempore tenetur amet quia optio nihil. Necessitatibus et et accusantium nihil aut optio odio.&quot;,
                &quot;video&quot;: {
                    &quot;id&quot;: 2,
                    &quot;url&quot;: &quot;http://cronin.biz/mollitia-laboriosam-ipsum-cupiditate-similique-dolor.html&quot;,
                    &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Sequi odio quasi quaerat.&quot;,
                &quot;description&quot;: &quot;Hic explicabo maxime voluptas accusamus molestiae et dolores. Accusantium reiciendis distinctio maxime at nesciunt ab. Delectus ipsa et reprehenderit quo qui nulla et.&quot;,
                &quot;video&quot;: {
                    &quot;id&quot;: 3,
                    &quot;url&quot;: &quot;https://www.olson.com/pariatur-modi-asperiores-consectetur-architecto-illum-at&quot;,
                    &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Dolores ut totam iste facere facere recusandae eius.&quot;,
                &quot;description&quot;: &quot;Debitis explicabo ducimus commodi veritatis debitis est. Sapiente sed dolore laboriosam. Voluptas vel fugiat totam ducimus maxime iste porro quae.&quot;,
                &quot;video&quot;: {
                    &quot;id&quot;: 4,
                    &quot;url&quot;: &quot;http://www.roberts.org/&quot;,
                    &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Et tempora eum facilis velit quibusdam quibusdam eos.&quot;,
                &quot;description&quot;: &quot;Dolores quibusdam optio pariatur sunt aut ut ullam. Possimus in explicabo similique. Aliquid voluptatum magni fugiat ut.&quot;,
                &quot;video&quot;: {
                    &quot;id&quot;: 5,
                    &quot;url&quot;: &quot;https://www.fadel.com/suscipit-tenetur-illo-qui-sed-aliquid-deserunt&quot;,
                    &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;
                }
            }
        ],
        &quot;users&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prof. River Schinner V&quot;,
                &quot;email&quot;: &quot;mkuhlman@example.org&quot;,
                &quot;course_user&quot;: {
                    &quot;favorite&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Benny Rolfson&quot;,
                &quot;email&quot;: &quot;gaylord.cassidy@example.org&quot;,
                &quot;course_user&quot;: {
                    &quot;favorite&quot;: 0
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Frederique Rogahn&quot;,
                &quot;email&quot;: &quot;jaycee92@example.org&quot;,
                &quot;course_user&quot;: {
                    &quot;favorite&quot;: 0
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Lorenz Kutch&quot;,
                &quot;email&quot;: &quot;murray04@example.org&quot;,
                &quot;course_user&quot;: {
                    &quot;favorite&quot;: 0
                }
            }
        ],
        &quot;comments&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;text&quot;: &quot;Quo molestias ipsam amet numquam accusamus ut pariatur. Enim nulla id enim. Alias animi cumque ea voluptas. Quia earum eligendi laboriosam deleniti modi.&quot;,
                &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;,
                &quot;user&quot;: {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;Lorenz Kutch&quot;,
                    &quot;email&quot;: &quot;murray04@example.org&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;text&quot;: &quot;Repellendus deserunt qui assumenda voluptas iste quibusdam dolores. Quis est in cupiditate hic rerum commodi. Adipisci commodi voluptatem deserunt aliquam.&quot;,
                &quot;created_at&quot;: &quot;03-01-2026 19:32:43&quot;,
                &quot;user&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Prof. River Schinner V&quot;,
                    &quot;email&quot;: &quot;mkuhlman@example.org&quot;
                }
            }
        ],
        &quot;rates&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;rate&quot;: 4963.9,
                &quot;user&quot;: {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Keven Auer&quot;,
                    &quot;email&quot;: &quot;rdenesik@example.net&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;rate&quot;: 2351.8,
                &quot;user&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Collin Farrell&quot;,
                    &quot;email&quot;: &quot;qauer@example.org&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;rate&quot;: 18488840.316362,
                &quot;user&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Collin Farrell&quot;,
                    &quot;email&quot;: &quot;qauer@example.org&quot;
                }
            }
        ]
    },
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;success&quot;,
    &quot;average&quot;: 6165385.338787333
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courses--id-" data-method="GET"
      data-path="api/courses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courses--id-"
                    onclick="tryItOut('GETapi-courses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courses--id-"
                    onclick="cancelTryOut('GETapi-courses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courses--id-"
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
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-courses--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the course. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-courses--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-courses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/courses/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courses/1"
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

<span id="example-responses-DELETEapi-courses--id-">
</span>
<span id="execution-results-DELETEapi-courses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-courses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-courses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-courses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-courses--id-" data-method="DELETE"
      data-path="api/courses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-courses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-courses--id-"
                    onclick="tryItOut('DELETEapi-courses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-courses--id-"
                    onclick="cancelTryOut('DELETEapi-courses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-courses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/courses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-courses--id-"
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
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-courses--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the course. Example: <code>1</code></p>
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
