@props(['data' => []])

<fieldset class="education-wrapper block">
    <legend>
        <h2>Education:</h2>
    </legend>
    <div class="alignment-wrapper">
        @foreach ($data as $index => $edu)
            <section>
                @foreach ($edu as $key => $item)
                    <x-resume.key-value key="{{ $key }}" value="{{ $item }}" style="row" />
                @endforeach
            </section>
            @if ($index === 0)
                <div class="vertical-rule"></div>
            @endif
        @endforeach
    </div>
</fieldset>

<style>
    .education-wrapper {
        border: 5px double black;
        border-radius: 10px;
        width: 90%;
        margin: 10px auto;

        legend {
            margin-left: 20px;
            padding: 0 10px;

            h2 {
                font-weight: 700;
            }
        }

        .alignment-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            padding-bottom: 15px;

            .vertical-rule {
                width: 5px;
                margin: 10px 0 15px 0;
                border: 2px solid #000;
            }
            section {
                margin: 10px;

                dl {
                    display: flex;
                    gap: 5px;
                    text-transform: capitalize;

                    dt {
                        text-decoration: underline;
                    }

                    dd {
                        font-style: italic;

                        &::before {
                            content: ' -';
                            padding-right: 5px;
                        }
                    }
                }
            }            
            
            @media only screen and (max-width:480px) {
                flex-direction: column;

                .vertical-rule {
                    margin: 10px auto;
                    height: 5px;
                    width: 90%;
                }
                section {
                    dl {
                        margin: 10px;
                        flex-direction: column;
                        dd {
                            margin-left: 10px;
                        }
                    }
                }
            }
        }
    }
</style>
