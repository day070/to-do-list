 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>To Do List</title>
   <link rel="stylesheet" href="style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>

 <body>
   <div class="container">
     <div class="header">
       <div class="title">
         <i class='bx bx-sun'></i>
         <span>To Do List</span>
       </div>
       <div class="description">
         <?= date("l, d M Y") ?>
       </div>
     </div>
     <div class="content">
       <div class="card">
         <form action="" method="post">
           <input type="text" class="input-control" name="" placeholder="Add task">
           <div class="text-right">
             <button type="submit" name="add">Add</button>
           </div>
         </form>
       </div>

       <div class="card">
         <div class="task-items done">
           <div>
             <input type="checkbox" checked>
             <span>Mandi</span>
           </div>
           <div>
             <a href="" class="text-edit" title="Edit"><i class='bx bx-edit'></i></a>
             <a href="" class="text-delete" title="Delete"><i class='bx bx-trash'></i></a>
           </div>
         </div>
       </div>

       <div class="card">
         <div class="task-items">
           <div>
             <input type="checkbox">
             <span>bangun tidur</span>
           </div>
           <div>
             <a href="" class="text-edit" title="Edit"><i class='bx bx-edit'></i></a>
             <a href="" class="text-delete" title="Delete"><i class='bx bx-trash'></i></a>
           </div>
         </div>
       </div>

     </div>
   </div>
 </body>

 </html>