<div>
    <h4>Credentials</h4>
    <div>
        <i class="ti ti-clock"></i>
        Created : {{ $app->created_at->diffForHumans() }}
    </div>
<pre><code>
PUSHER_APP_ID = {{ $app->id }}
PUSHER_APP_KEY = {{ $app->key }}
PUSHER_APP_SECRET = {{ $app->secret }}
PUSHER_HOST = {{env('SOKETI_HOST')}}
PUSHER_PORT = {{env('SOKETI_PORT')}}
PUSHER_SCHEME= {{config('soketi.soketi_scheme')}}</code>
</pre>

</div>
