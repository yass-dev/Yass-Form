<?php

	if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['description']) && isset($_POST['password']) && isset($_POST['calcul']))
	{
		if(!empty($_POST['firstName']) && !empty($_POST['lastName']))
		{
			if(verifyEmail($_POST['email']))
			{
				if(is_numeric($_POST['phone']))
				{
					if(!empty($_POST['description']))
					{
						if($_POST['calcul'] == "13")
						{
							echo "success";
						}
						else
						{
							exit("You are not human ?!");
						}
					}
					else
					{
						exit("description can't be empty.");
					}
				}
				else
				{
					exit("Phone must be numeric.");
				}
			}
			else
			{
				exit("Your email is not valid.");
			}
		}
		else
		{
			exit("Your name is not valid.");
		}
	}
	else
	{
		exit("Data is missing");
	}

function verifyEmail($email)
{
	if(sizeof(explode('@', $email)) == 2 && sizeof(explode('.', $email)) == 2 && !empty(explode('@', $email)[0]) && !empty(explode('@', $email)[1]) && !empty(explode('.', $email)[0]) && !empty(explode('.', $email)[1]) && !empty(explode('.', explode('@', $email)[1])[0]))
	{
		return true;
	}
	else
		return false;

	$userName = explode("@", $email);
}
?>