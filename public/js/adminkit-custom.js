$(document).on("click", ".sidebar-toggle", function() 
{
    if ($("#sidebar").hasClass("collapsed"))  
    {        
        document.cookie = "sidebar-collapsed=1; path=/";
    }
    else
    {
        document.cookie = "sidebar-collapsed=0; path=/";
    }
});