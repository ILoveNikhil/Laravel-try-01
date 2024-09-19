<h1>Home page</h1>

<x-message-banner msg="This is component message 01" class="success" />
<x-message-banner msg="This is component message 02"  class="error"/>
<x-message-banner msg="This is component message 03"  class="warning"/>

<style>
    .success{
        color: green;
    }
    .error{
        color: red;
    }
    .warning{
        color: yellow;
        font-weight: bold;
        background: orange;
    }
</style>