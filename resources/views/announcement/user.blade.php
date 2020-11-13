<x-app>
      
    <x-header 
    
    title="i tuoi annunci"
    
    />
    
    <div class="container my-5">
        <div class="row ">

            @foreach ($announcements as $announcement)
         
            <x-card :announcement="$announcement"  />
   

            

         

            @endforeach

           
        </div>
    </div>   
        
    
    
</x-app>