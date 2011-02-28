<?php $this->load->view('global/_new_header.php'); ?>

<h2>The GetSparks.org Manifesto</h2>

<p>
    The 'spark' system and GetSparks website was created for a few different reasons. The basis of why
    is hashed out in a <a href="http://codeigniter.com/forums/viewthread/181110/">post on the CodeIgniter forums</a>.
</p>

<p>
    It really boils down to solving these problems:
</p>

<ol>
    <li>
        <p>
            There are plenty of feature requests for CodeIgniter, especially when it
            comes to libraries. 99% of the suggested libraries don't belong
            built-in to the framework. We hope that Sparks helps keep CodeIgniter
            one of the lightest, fastest frameworks for PHP.
        </p>
    </li>
    <li>
        <p>
            Some fantastic and useful libraries have been written
            for CodeIgniter, but they remain scattered around the internet on blogs,
            wikis, forums, and github. Using these in your projects is a chore
            of copy and paste. 
        </p>
    </li>
    <li>
        <p>
            When you're thinking of using someone else's code, there isn't much
            of a way to gauge whether it's ready for the big-time. Is it fault
            tolerant? Unit tested? Reletively recent?
        </p>
    </li>
    <li>
        <p>
            <strong>Most importantly:</strong> CodeIgniter developers don't have
            an easy way to share their code and contribute extensions to CodeIgniter
            functionality.
        </p>
    </li>
</ol>

<p>
    <strong>GetSparks is about making great libraries written by the community easy to
    find, create and distribute.</strong>
</p>

<h3>The Team</h3>

<p>
<img src="<?php echo Gravatar_helper::from_email('katzgrau@gmail.com', null, 50); ?>" alt="Kenny Katzgrau" />
<img src="<?php echo Gravatar_helper::from_email('john@crepezzi.com', null, 50); ?>" alt="John Crepezzi" />
<img src="<?php echo Gravatar_helper::from_email('beau.frusetta@gmail.com', null, 50); ?>" alt="Beau Frusetta" />
<img src="<?php echo Gravatar_helper::from_email('mdpauley@gmail.com', null, 50); ?>" alt="Mike Pauley" />
<img src="<?php echo Gravatar_helper::from_email('you@example.com', null, 50); ?>" alt="You?" />
</p>

<h3>The Project</h3>

<p>Here's some project details:</p>

<ol>
    <li>Issue Tracker / Project Management:</li>
    <li>Code Repository:</li>
</ol>

<h3>Get Involved</h3>

<p>
    We're looking for help.
</p>
<?php $this->load->view('global/_new_footer.php'); ?>