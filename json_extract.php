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



SELECT JSON_EXTRACT(form_data, '$.v_mem_name') from test;  

SELECT JSON_UNQUOTE(JSON_EXTRACT(form_data, '$.v_mem_name')) as name,JSON_UNQUOTE(JSON_EXTRACT(form_data, '$.v_cpr')) as name  from test;


// Table Structure

CREATE TABLE `test` (
  `ids` int(11) NOT NULL,
  `form_data` json NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


// Column form_data

{
    "v_cpr": "1258965", //fetched data
    "v_dob": "1973-05-25",
    "action": "member_registration",
    "v_gender": "Male",
    "v_cpr_exp": "1973-05-25",
    "v_email_id": "aji@a.com",
    "v_employer": "SandsLab",
    "v_mem_name": "Ajit",//fetched data
    "v_user_name": "anisha",
    "v_contact_no": "123456",
    "v_driving_no": "19730525",
    "v_profession": "IT",
    "v_blood_group": "AB+",
    "v_driving_exp": "1973-05-25",
    "v_nationality": "Indian",
    "v_passport_no": "1236548",
    "v_mem_password": "SandsLab",
    "v_address_local": "Test",
    "v_marital_status": "yes",
    "v_mobile_whatsapp": "25896589",
    "v_hobbies_passions": "Reading",
    "v_address_home_town": "Noting",
    "v_emergency_contact": "19730525",
    "v_passport_exp_date": "1973-05-25",
    "v_wedding_anniversary": "2001-02-04"
}

  
   -> is just a shortcut or alias for JSON_EXTRACT
   ->> is just a shortcut or alias for JSON_UNQUOTE(JSON_EXTRACT(…))
  
  
