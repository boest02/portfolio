@props(['data' => []])

<section class="strengths-wrapper">
    <h2>Strenghts:</h2>
    @foreach ($data as $strength)
        <section>
            <x-resume.key-value key="{{ $strength['name'] }}" value="{{ $strength['description'] }}" style="row" />
        </section>
    @endforeach
</section>

<style>
    .strengths-wrapper {
        text-transform: capitalize;
        max-width: 500px;
        margin-top: 25px;
        align-self: start;
        h2 {
            font-weight: 700;
            text-transform: uppercase;
        }
        section {
            margin: 10px;
            dt {
                font-weight: 800;
                font-style: italic;
            }

            dd {
                margin: 5px 10px;
            }
        }
    }
</style>
