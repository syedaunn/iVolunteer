package info.androidhive.slidingmenu;

import android.app.Activity;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.os.Handler;

public class splashScreen extends Activity{
	

	public static final String MyPREFERENCES = "MyPrefs" ;
	
	SharedPreferences sharedpreferences;
	
	private static int SPLASH_TIME_OUT = 3000;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		//setContentView(R.layout.splashScreen);
		
		
		new Handler().postDelayed(new Runnable() {

			/*
			 * Showing splash screen with a timer. This will be useful when you
			 * want to show case your app logo / company
			 */

			@Override
			public void run() {
				// This method will be executed once the timer is over
				// Start your app main activity
				if(getSharedPreferences(MyPREFERENCES, MODE_PRIVATE).getString("username", "").compareTo("")==0){
					startActivity(new Intent(splashScreen.this,SignIn.class));
					finish();
				}
				else{
					startActivity(new Intent(splashScreen.this,SignIn.class));
					finish();
				}
				
			}
		}, SPLASH_TIME_OUT);
		
	}

	
}
