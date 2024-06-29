@props(['data' => []])

<section class="experience-wrapper block">
    <h2>Experience:</h2>
    @foreach ($data as $exps)
        <section>
            @foreach ($exps as $key => $exp)
                @if (is_array($exp))
                    @foreach ($exp as $items)
                        <x-resume.heading title="{{ $items['title'] }}" start="{{ $items['start_date'] }}"
                            end="{{ $items['end_date'] }}" />
                        <ul>
                            @if (array_key_exists('responsibilities', $items))
                                @foreach ($items['responsibilities'] as $resp)
                                    @if (is_array($resp))
                                        <ul>
                                            @foreach ($resp as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <li>{{ $resp }}</li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    @endforeach
                @else
                    <h2>{{ $exp }}</h2>
                @endif
            @endforeach
        </section>
    @endforeach
</section>

<style>
    .experience-wrapper {
        section {
            display: flex;
            flex-direction: column;
            margin: 15px;
            
            h2 {
                font-weight: 700;
            }

            &>ul {
                margin: 10px 45px;

                &>ul {
                    margin: 0px 35px;
                }
            }
        }
    }
</style>
