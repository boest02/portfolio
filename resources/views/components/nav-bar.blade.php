<nav class="nav-bar">
    <ul>
        <li><a href="/about" title="a little about who I am">About</a></li>
        <li><a href="/resume" title="my resume to show my career highlights">Resume</a></li>
        <li><a href="/portfolio" title="an area to show someof the items I can build">Portfolio</a></li>
    </ul>
</nav>

<style>
    .nav-bar {
        diplay: flex;
        place-content: center;
        width: 100vw;
        height: 90px;
        background-color: var(--nav-background-color);
        color: var(--nav-font-color);
        font-weight: 600;
        box-shadow: -16px 7px 2px 1px rgba(0, 0, 0, 0.2);   
                 
        ul {
            display: flex;
            justify-content: space-around;
            list-style-type: none;
            a {
                text-decoration: none;
                color: var(--nav-font-color);
            }
        }
    }
</style>