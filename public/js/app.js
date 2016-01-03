$(document).foundation();

jQuery(".alert").click(function()
{
    if(!confirm('Você quer mesmo apagar este registro?'))
    {
        return false;
    }
});