<h2>Versus</h2>
<h3>What's wrong with my monolithic framework to make me pick up lean?</h3>
<h4>Short answer</h4>
<p>There's nothing wrong with your framework. It just follows a different style of code than lean.</p>
<h4>Long answer</h4>
<p>
    Most frameworks nowadays strive to become a feature complete framework that will provide
    you with everything you might ever need.
</p>
<p>
    In my experience, at some point, there _was_ in fact something, that was not provided by the framework
    and I had to deal with the vast overhead that is a monolithic framework. No joy.
</p>
<p>
    lean follows a different design philisophy. It provides you with barebone components showing a proven way to do things.
    If you need more than those essential ingredients, there's a very good chance you can build ontop of them.
</p>
<p>
    lean's components were crafted to have as little dependency on each other as possible (and sensible), making for a small footprint.
</p>
<p>
    Should you need any special feature from lean, don't be afraid to extend things and look at the source. The components are small and cleanly written, enjoy.
</p>