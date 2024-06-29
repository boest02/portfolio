<aside class="aside-wrapper">
    <div class="layout-wrapper">
        {{ $slot }}
    </div>
</aside>

<style>
    .aside-wrapper {
        width: 95%;
        margin: 20px auto;
        padding: 20px;
        border: 4px solid #000;
        box-shadow: -16px 7px 2px 1px rgba(0, 0, 0, 0.2);
        container-type: inline-size;
    }

    .layout-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: space-around;        
    }

    @container (max-width: 700px) {
        .layout-wrapper {
            flex-direction: column-reverse;
            align-items: center;
        }
    }
</style>
