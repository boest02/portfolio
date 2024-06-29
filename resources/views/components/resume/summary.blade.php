@props(['summary' => ''])

<section class="summary-wrapper block">
    <h2>Summary:</h2>
    <p>{!! $summary !!}</p>
</section>

<style>
    .summary-wrapper {
        p {
            text-indent: 20px;
            margin: 5px 10px;
        }
    }
</style>
