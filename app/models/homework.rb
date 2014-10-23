class Homework < ActiveRecord::Base
belongs_to :subject
has_many :subject
end
