package info.androidhive.slidingmenu;

import android.app.Activity;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.SharedPreferences.Editor;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

public class SignIn extends Activity{
	
	TextView username;
	TextView password;
	Button signIn;
	
	public static final String MyPREFERENCES = "MyPrefs" ;
	
	SharedPreferences sharedpreferences;
	
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.coverpage);
		username=(TextView)findViewById(R.id.email);
		password=(TextView)findViewById(R.id.password);
		signIn=(Button)findViewById(R.id.btnLogin);
		signIn.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				String tempUsername=username.getText().toString();
				String tempPassword=password.getText().toString();
				if(tempUsername.replaceAll("\\s","").compareTo("")!=0 && tempPassword.replaceAll("\\s","").compareTo("")!=0){
					if(validateUser()){
						Editor editor = sharedpreferences.edit();
					    editor.putString("username",username.getText().toString());
					    editor.commit();
						startActivity(new Intent(SignIn.this,MainActivity.class));
					}
				}
				startActivity(new Intent(SignIn.this,MainActivity.class));
				
			}
		});
		
	}
	public boolean validateUser(){
		if(username.getText().toString().compareTo("hunainarif1994")==0 && password.getText().toString().compareTo("nope@123")==0){
			return true;
		}
		return false;
	}

}
