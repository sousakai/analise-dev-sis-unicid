package br.com.exemplo.view;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Window.Type;
import javax.swing.JLabel;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JComboBox;
import javax.swing.JButton;
import javax.swing.JPasswordField;
import java.awt.TextArea;
import javax.swing.DefaultComboBoxModel;

public class TelaPrincipal extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField txtCodLeitor;
	private JTextField txtNomeLeitor;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					TelaPrincipal frame = new TelaPrincipal();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public TelaPrincipal() {
		setTitle("Manutenção Leitor");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 651, 480);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblCodigoDoLeitor = new JLabel("Código Leitor");
		lblCodigoDoLeitor.setFont(new Font("Tahoma", Font.PLAIN, 18));
		lblCodigoDoLeitor.setBounds(20, 37, 106, 22);
		contentPane.add(lblCodigoDoLeitor);
		
		JLabel lblNomeDoLeitor = new JLabel("Nome do Leitor");
		lblNomeDoLeitor.setFont(new Font("Tahoma", Font.PLAIN, 18));
		lblNomeDoLeitor.setBounds(20, 89, 122, 22);
		contentPane.add(lblNomeDoLeitor);
		
		JLabel lblTipoDoLeitor = new JLabel("Tipo do Leitor");
		lblTipoDoLeitor.setFont(new Font("Tahoma", Font.PLAIN, 18));
		lblTipoDoLeitor.setBounds(20, 138, 110, 22);
		contentPane.add(lblTipoDoLeitor);
		
		JLabel lblMensagem = new JLabel("Código Leitor");
		lblMensagem.setFont(new Font("Tahoma", Font.PLAIN, 18));
		lblMensagem.setBounds(20, 402, 580, 31);
		contentPane.add(lblMensagem);
		
		txtCodLeitor = new JTextField();
		txtCodLeitor.setFont(new Font("Tahoma", Font.PLAIN, 18));
		txtCodLeitor.setBounds(232, 32, 374, 31);
		contentPane.add(txtCodLeitor);
		txtCodLeitor.setColumns(10);
		
		JComboBox cmbTipoLeitor = new JComboBox();
		cmbTipoLeitor.setModel(new DefaultComboBoxModel(new String[] {"Selecione uma opção", "Aluno", "Professor", "Administrativo"}));
		cmbTipoLeitor.setFont(new Font("Tahoma", Font.PLAIN, 18));
		cmbTipoLeitor.setBounds(232, 133, 368, 32);
		contentPane.add(cmbTipoLeitor);
		
		JButton btnNovo = new JButton("Novo");
		btnNovo.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnNovo.setBounds(21, 188, 69, 25);
		contentPane.add(btnNovo);
		
		JButton btnSalvar = new JButton("Salvar");
		btnSalvar.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnSalvar.setBounds(116, 188, 77, 25);
		contentPane.add(btnSalvar);
		
		JButton btnConsultar = new JButton("Consultar");
		btnConsultar.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnConsultar.setBounds(211, 188, 103, 25);
		contentPane.add(btnConsultar);
		
		JButton btnAlterar = new JButton("Alterar");
		btnAlterar.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnAlterar.setBounds(324, 188, 83, 25);
		contentPane.add(btnAlterar);
		
		JButton btnExcluir = new JButton("Excluir");
		btnExcluir.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnExcluir.setBounds(413, 188, 83, 25);
		contentPane.add(btnExcluir);
		
		JButton btnListar = new JButton("Listar");
		btnListar.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnListar.setBounds(515, 188, 73, 25);
		contentPane.add(btnListar);
		
		TextArea txtListar = new TextArea();
		txtListar.setBounds(21, 229, 585, 150);
		contentPane.add(txtListar);
		
		txtNomeLeitor = new JTextField();
		txtNomeLeitor.setFont(new Font("Tahoma", Font.PLAIN, 18));
		txtNomeLeitor.setColumns(10);
		txtNomeLeitor.setBounds(232, 85, 374, 31);
		contentPane.add(txtNomeLeitor);
	}
}
