@props(['data' => []])

<section class="skills-wrapper block">
    <h2>Skills</h2>
    @foreach ($data as $key => $skill)
        <section>
            <h3>{{ $key }}</h3>
            <ul>
                @foreach ($skill as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </section>
    @endforeach
</section>

<style>
    .skills-wrapper {
        display: grid;
        max-width: 500px;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 40px auto;
        grid-template-areas: "title title"
                             "list1 list2";
        text-transform: capitalize;
        border: 1px solid #000;
        &>*{
            border: 1px solid #000;
        }        
        h2 {
            grid-area: title;            
            width: 100%;
            height: 100%;    
            text-align: center;
            padding-top: 5px;   
        }
        section {
            padding: 10px;
            min-width: 150px;
            h3 {
                margin-bottom: 5px;
                text-transform: capitalize;
                font-weight: 700;
                text-align: left;                   
            }

            ul {
                margin: 10px auto;
                list-style-type: '\2713';

                li {
                    padding-left: 15px;
                    margin-left: 20px;
                }
            }
        }
    }
</style>
