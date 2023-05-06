<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                table {
                    margin: 0;
                    width: 100%;
                    border-collapse: collapse;
                    box-shadow: 0 0 5px rgba(0, 0, 0, .25)
                
                }
                table tr{
                  padding: .45em;
                }
                thead tr{
                    width: auto;
                  max-width: none;
                  white-space: nowrap;
                  background-color: antiquewhite
                }
                thead th{
                    width: auto;
                  max-width: none;
                  white-space: nowrap;
                  font-size: 1.15em;
                }
                tbody tr:nth-child(even){
                  background-color:beige
                }
                table th, table td{
                    width: auto;
                  max-width: none;
                  white-space: nowrap;
                  font-size: 1em;
                  padding: 1em;
                  text-align: center;
                }
                thead th{
                    width: auto;
                  max-width: none;
                  white-space: nowrap;
                  font-size: 1.15em
                }
                
                
                @media(max-width: 580px){
                  table{
                    border: 3px solid black
                  }
                  table thead tr{
                    display:none
                  }
                  table tr{
                    display:block;
                  }
                  table th, table td{
                    padding: 0em
                  }
                  table td{
                    text-align: right;
                    display:block;
                    font-size: 1em;
                  }
                  table td::before{
                    content:attr(data-label)":";
                    float: left;
                  }
                  tbody tr:nth-child(even){
                    background-color: antiquewhite;
                  }
                }
            
                
                productos 
            </div>
        </div>
    </div>
</x-app-layout>
