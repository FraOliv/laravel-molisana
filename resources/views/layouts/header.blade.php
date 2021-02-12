<nav class="navbar">
      <img  src="{{asset ('img/marchio-sito.png')}}" alt="">
      
            <div class="links">

                <a href="/" class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}">Homepage</a>
                <a href="products" class="{{ Route::currentRouteName() === 'products' ? 'active' : ''}}">Products</a> 
                <a href="contacts" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}">Contacts<a>               
            </nav>