<script>
    @if (env('APP_ENV')=='Production')
    if (location.protocol !== 'https:') {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
    @endif

</script>
