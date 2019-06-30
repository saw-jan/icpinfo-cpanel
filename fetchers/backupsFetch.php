//variables
    RequestQueue requestQueue;
    String fetchData="http://192.168.1.12/icp/fetchers/getStudent.php";
    String find="http://192.168.1.12/icp/fetchers/findStudent.php";

//onCreate()
requestQueue = Volley.newRequestQueue(getApplicationContext());

//onClick
//inserts
StringRequest request = new StringRequest(Request.Method.POST, find,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {

                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

            }
        })
        {
            @Override
            protected Map<String, String> getParams() throws AuthFailureError{
                Map<String, String> params = new HashMap<String, String>();
                params.put("studentid",studentid.getText().toString());
                params.put("password",pass.getText().toString());
                return params;
            }
        };
        requestQueue.add(request);

//fetch data
        final JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.POST,
                fetchData, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {
                try {
                    JSONArray students = response.getJSONArray("student");
                    for (int a = 0; a < students.length(); a++) {
                        JSONObject student = students.getJSONObject(a);
                        String id = student.getString("Student_ID");
                        String name = student.getString("Name");
                        String password = student.getString("Password");
                        String gender = student.getString("Gender");
                        String faculty = student.getString("Faculty");

                        txtcheck.append(id+", "+name+", "+gender+", "+faculty);
                    }
                }
                catch (JSONException e){
                    e.printStackTrace();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

            }
        });
        requestQueue.add(jsonObjectRequest);
