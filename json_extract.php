// 1st Method
select ids, 
       form_data->>'$.v_cpr' as cpr,
       form_data->>'$.v_mem_name' as name
       from test;
       
  Output
  ids cpr   name
  1   1234  Anisha
  
  
  select ids, 
       form_data->>'$.v_cpr' as cpr,
       form_data->'$.v_mem_name' as name
       from test;
       
  Output
  ids  cpr    name
  1    12345  "Anisha" 
  
 //Second Method      
       
  SELECT JSON_EXTRACT('{"name": "John", "age": 30}', '$.name');  
  Output
  
  name
  "John"
  
   SELECT JSON_UNQUOTE(JSON_EXTRACT('{"name": "John", "age": 30}', '$.name'));  
  Output
  
  name
  John
  
   -> is just a shortcut or alias for JSON_EXTRACT
   ->> is just a shortcut or alias for JSON_UNQUOTE(JSON_EXTRACT(…))
  
  
