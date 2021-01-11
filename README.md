**Katorymnd session class**

This session class will assist developers in assigning and creating, plus retrieving website page session.

please include **katorymnd_session.php** on every page that you need to use the session.

**Set session**

*example array*

```PHP
$katorymnd_session->set_session ('name', array('name' => 'john','number' => '123',));

 //call the session

$katorymnd_session->get_session('name', 'number');  /*results*/ [123]
```


*Another example*

```PHP $katorymnd_session->set_session('names', 'smith');//set session*      

     // call the session

     print $katorymnd_session->get_session('names');
 /*results*/ [smith]

          // check session  to retrict page access     

      if($katorymnd_session->get_session('names') == true){      

     // login user     

        }else{     

     //no user session     

     }

//Display available sessions in array
$katorymnd_session->display_session(); 

/**
 * Delete session
 */

$katorymnd_session->destroy_session(); // delete  session

```

