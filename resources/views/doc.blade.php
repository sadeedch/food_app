@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')


  
<div  align = "left">
<h1 class="bg-info" align = "center" >Documentation</h1>
  
  <h2 class="bg-success" align = "center" style = "width: 450px;"  > Peer Review Reflection</h2>
    <p>               This was the first time I have done peer reviews in any of my courses. To me, doing the peer review has both pros and cons. 
    The benefits of the peer review are students get to identify the strengths and weaknesses of their code and they get to know how the other student has tackled a certain problem.
    They can share the idea of how to solve a certain problem. This also provides the students to bounce their ideas to each other. 
    As one student cannot have the same reviewer for two consecutive weeks, this provides the student to get to know more students. 
    Students also receive the feedback to their code. 
    But at the same time, there are few disadvantages to this approach as well.
    One of the main disadvantage is that both the reviewers are students and they have the soft corner for each other.
    This results in unwilling to critically think about other students work and often default to unwilling praise. 
    If both do not know about a certain solution, they are unable to provide a helpful feedback to each other. 
    So I think this approach is a waste of time too. </p>

  <h2 class="bg-success" align = "center" style = "width: 450px;"><strong>Problem Statement</strong></h2>
    <p>Building a food ordering application. With this application, restaurants can list the dishes they want to sell. Customers can order selected dishes.  </p><br> 
    
    <h2 class="bg-success" align = "center" style = "width: 450px;"><strong>Completed Tasks</strong></h2>
    <li>Users can register with this website. When registering, users must provide their name, email,
    password, and address. Furthermore, users must register as either a:a. Restaurant, or b. Consumer. </li>
    <li>  Registered users can login. Users are able to login (or get to the login page) from anypage. A logged in user are to log out. </li>
    <li> Only the restaurant users can add dishes to the list of dishes sold by his restaurant. They can also update and delete existing dishes. A dish must have a name and a price. A dish name must be unique. A price must be a positive value. </li>
    <li> All users (including guests) can see a list of registered restaurants. They can click into any restaurant to see the dishes this restaurant sells. </li>
    <li> The list of dishes are paginated with 5 dishes per page </li>
    <li>  Only consumers can purchase a dish. The purchase is saved in the database. Dish purchased , the price, and the delivery address (which is the consumer’s address) is displayed in the cart to let the user know that the purchase is successful</li>
    <li>  Appropriate redirections are provided</li>
    <li> When restaurant users add a new dish, the dish name is unique for that restaurant. </li>
    <li> When restaurant users add a dish, he can upload a photo for that dish. This photo will be displayed when this dish displayed </li>
    <li>  Consumers can add multiple dishes to a cart, see the contents in the cart, the cost of this cart (the sum of all dishes).</li>
    <li>  All the dishes sold by a restaurant can be seen on stats page</li>
    <li>  Statistics page for restaurants </li>
    
  
    <h2 class="bg-success" align = "center" style = "width: 450px;"><strong>Technical Requirements fulfilled</strong></h2> 
    <li>  Used Laravel’s migration for database table creation. </li>
    <li>  Used Laravel’s seeder to insert default test data into the database. There is enough initial data to thoroughly test the retrieval, update, and deletion functionalities i have implemented.</li>
    <li>  Used Laravel’s ORM/Eloquent to perform database operations. </li>
    <li>  Proper security measures have been implemented.</li>
    <li>  Good coding practice is followed. This includes:</li>
    <li>  Naming: using consistent, readable, and descriptive names for files, functions, variables etc.</li>
    <li>  Readability: correct indenting/spacing of code.</li>
    <li>  Commenting: Functions have been commented.</li>
    <li>  View: proper use of template and template inheritance.</li>
    
    <h2 class="bg-success" align = "center" style = "width: 450px;"><strong>Entity Relationship Diagram</strong></h2>
    <img src="products_images/er.png" alt="product image" style="width:600px;height:600px;">
</div>


   
@endsection
