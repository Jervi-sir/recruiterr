@if (app()->environment() !== 'local')
<script>
    if (location.protocol !== 'https:') {
        location.replace(`https:${location.href.substring(location.protocol.length)}`);
    }
</script>
@endif
