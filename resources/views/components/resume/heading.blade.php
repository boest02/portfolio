@props(['title' => '', 'start' => '', 'end' => ''])

<dl class="heading-wrapper">
    <dt>
        <h3>{{ $title }}</h3>
    </dt>
    <dd>({{ $start }} - {{ $end }})</dd>
</dl>

<style>
    .heading-wrapper {

        display: flex;
        flex-direction: row;
        gap: 10px;
        margin: 15px;

        h3 {
            font-weight: 700;
        }
        
        dd {
            font-style: italic;
        }
        
        @media only screen and (max-width:480px)  {
            flex-direction: column;
            gap: 5px;
            dd {
                margin-left: 5px;
            }
        }

    }
</style>
