                <!-- Header -->
                    <header id="header">
                        <a href="/" class="logo">Massively</a>
                    </header>


                <!-- Nav -->
                    <nav id="nav">
                        <ul class="links">

                            <?php $pageName = $_SERVER['REQUEST_URI']; ?>

                            <li <?php echo ($pageName == '/' ? 'class="active"' : ''); ?> ><a href="/">This is Massively</a></li>
                            <li <?php echo ($pageName == '/generic' ? 'class="active"' : ''); ?> ><a href="/generic">Generic Page</a></li>
                            <li <?php echo ($pageName == '/elements' ? 'class="active"' : ''); ?> ><a href="/elements">Elements Reference</a></li>
<!--                             <li <?php echo ($pageName == '/emails' ? 'class="active"' : ''); ?> ><a href="/emails">Emails</a></li>
 -->
                        </ul>
                        
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                    </nav>